<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('signin');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/firstpage');
        } else {
            $this->check_email();
        }
    }

    public function check_email()
    {
        $email = $this->input->post('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            $this->session->set_userdata($user);
            $this->load->view('auth/password', $user);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered
          </div>');
            redirect('login');
        }
    }
    public function password()
    {

        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $pass = $this->input->post('password');
        $email = $this->session->userdata('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // $data['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();
        // echo $data['user']['password'];
        if (md5($pass) == ($user['password'])) {
            session_start();
            redirect('login/getmessage');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong password!
          </div>');

            redirect('login');
        }
    }

    public function signup()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/signup');
        } else {
            $data = [
                'email' => $this->input->post('email', true),
                'name' => $this->input->post('name', true),
                'password' => md5($this->input->post('password1')),
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Account created. Please Login!
          </div>');
            redirect('login');
        }
    }
    public function getMessage()
    {
        $email = $_SESSION["email"];
        $sql = $this->db->query("Select * from mail where receiver = '$email'");
        $data["mail"] = $sql->result_array();
        $this->load->view('main/default', $data);
    }
    public function getName()
    {
        $email = $_SESSION["email"];
        $sql = $this->db->query("Select name from user where email = '$email'");
        $name = $sql->result_array();
        $this->load->view('main/default', $name);
    }
    public function main()
    {
        $data['mail'] = $this->db->get_where('mail', ['receiver' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('main/default', $data);
    }
    public function check_email_msg()
    {
        $email = $this->input->post('receiver');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            $data = [
                'sender' => $this->session->userdata('email'),
                'receiver' => $this->input->post('receiver', true),
                'subject' => $this->input->post('subject', true),
                'text' => $this->input->post('message')
            ];
            $this->db->insert('mail', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Message sent!
              </div>');
            redirect('login/message');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered
          </div>');
            redirect('login/message');
        }
    }
    public function message()
    {
        $this->form_validation->set_rules('receiver', 'Email', 'required|trim');
        $this->form_validation->set_rules('subject', 'Subject', 'required|trim');
        $this->form_validation->set_rules('message', 'Text', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('main/newmsg');
        } else {
            $this->check_email_msg();
        }
    }
    public function chgpass()
    {
        $this->form_validation->set_rules('oldpass', 'Oldpass', 'required|trim');
        $this->form_validation->set_rules('newpass1', 'New Password', 'required|trim|min_length[3]|matches[newpass2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('newpass2', 'Confirm New Password', 'required|trim|matches[newpass1]');
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('main/chgpass');
        } else {
            $oldpass = $this->input->post('oldpass');
            $newpass = $this->input->post('newpass1');
            if (md5($oldpass) != $data['user']['password']) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong current password
                </div>');
                redirect('login/chgpass');
            } else {
                if ($oldpass == $newpass) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password can not same as current password
                    </div>');
                    redirect('login/chgpass');
                } else {
                    $password = md5($newpass);
                    $this->db->set('password', $password);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Change!
                    </div>');
                    redirect('login/chgpass');
                }
            }
        }
    }
    public function viewSent()
    { }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/index');
    }
}
