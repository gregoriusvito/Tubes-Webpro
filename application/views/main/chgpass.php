<html>

<head>
    <link rel="icon" href="logo_head.png" type="image/gif">
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <script href="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
</head>

<body>
    <div class="container">
        <?= $this->session->flashdata('message') ?>
        <form method='POST' action="<?= site_url('login/chgpass'); ?>" class="form">
            <div>
                <p>Current Password</p>
                <input type="password" name="oldpass" placeholder="Current Password"><br>
                <?= form_error('oldpass', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div>
                <p>New password</p>
                <input type="password" name="newpass1" placeholder="New password here" id="newpass1"><br>
                <?= form_error('newpass1', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div>
                <p>Confirm new password</p>
                <input type="password" name="newpass2" placeholder="Confirm password here" id="newpass2"><br>
                <?= form_error('newpass2', '<small class="text-danger">', '</small>'); ?>
            </div>
            <input type="submit" class="btn">
        </form>
        <button class="btn" onclick="location.href='<?= site_url('login/getmessage'); ?>'">Home</button>
    </div>

    <style>
        .container {
            border: 1px solid black;
            height: 510px;
            width: 370px;
            border-radius: 8px;
            padding: 1px 0px 80px 0px;
            float: center;
            margin-top: 7%;
            margin-left: 38%;
        }

        .container form {
            padding: 55px 0px 0px 30px;
        }

        .form {
            margin-top: -20px;
        }

        input[type="password"] {
            height: 40px;
            width: 300px;
            font-family: calibri;
            font-size: 15px;
            margin-bottom: 20px;
            background-color: white;
            padding-left: 20px;
        }

        .btn {
            /*text-align: center;*/
            padding: 8px 25px;
            font-size: 15px;
            display: inline-block;
            color: white;
            background-color: #0066ff;
            border: none;
            border-radius: 4px;
            margin-top: 10px;
        }

        input+button {
            margin-left: 109px;
        }
    </style>

    <!-- <script>
        pass1 = document.getElementById("newpass1").value;
        pass2 = document.getElementById("newpass2").value;

        function cekPassword() {
            if (pass1 == pass2) {
                window.open("SentMailpage.html");
            } else {
                alert(" New Password doesn't match !")
            }
        }
    </script> -->
</body>

</html>