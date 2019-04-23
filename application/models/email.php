<?php

class email extends CI_Model
{
  public function login_user($email)
  {
    $this->db->where('email', $email);

    $result = $this->db->get('user');
    if ($result->num_rows() == 1) {
      return $result->row(0);
    } else {
      return false;
    }
  }
  public function check_email($email)
  {
    $query = $this->db->get_where('user', array('email' => $email));
    if ($query->num_rows() == 1) {
      redirect('views/password.php');
    } else {
      redirect('views/signup.php');
    }
  }
}
