<html>

<head>
    <title>SIGN UP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="create.css"> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <script href="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>

</head>

<body>
    <div class="container">

        <form method='post' action="<?php site_url('login/signup') ?>">

            <div class="form-input">
                <table>
                    <tr>
                        <td>
                            <img id="img1" src="<?= base_url('images/head.png') ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="name" placeholder="Name" id="firstname" value="<?= set_value('name'); ?>">
                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>

                            <div>
                                <input type="email" name="email" placeholder="Username" id="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div>
                                <input type="password" name="password1" placeholder="Password" id="Password">
                                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>

                                <input type="password" name="password2" placeholder="confirm"> </div>
                        </td>
                        <td>
                            <img id="img2" src="<?= base_url('images/logo_create.png') ?>">
                        </td>
                    </tr>
                </table>
                <a class="a2" href="<?= site_url('login/index') ?>">Sign in instead</a>
                <input type="submit" name="next-login" value="SignUp" class="btn-user-btn-block">
            </div>
        </form>

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
            /* width: : 500;
            height: 500; 
             padding: 1px 0px 1px 1px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            border-width: 50;
            border: 1px solid #e8ebef; */
            /* border: 1px solid; */
            margin-left: 27%;
            /* background-color: gree */
            margin-top: 8%;
        }

            {
            margin-left: 20px;
        }

        #img1 {
            /* padding: 1px 750px 1px 1px; */
            width: 330px;
            height: 150px;
            /* margin-left: 10px; */
            margin-top: 3px;
            /*margin-bottom: 45px;*/
        }

        #img2 {
            /*padding: 20px 750px 1px 1px;*/
            /*margin-left: 100px;*/
            width: 250px;
            height: 270px;
            margin-top: 1px;
            /*margin-bottom: 45px;*/
        }

        img+div {
            margin-left: 20px;
        }

        #email {
            height: 35px;
            width: 323px;
            font-family: calibri;
            font-size: 14px;
            margin-bottom: 20px;
            background-color: white;
            padding-left: 20px;
        }

        #firstname {
            height: 35px;
            width: 323px;
            font-family: calibri;
            font-size: 14px;
            margin-left: 0px;
            margin-bottom: 20px;
            background-color: white;
            padding-left: 20px;
        }

        /* #lastname {
            height: 35px;
            width: 175px;
            font-family: calibri;
            font-size: 14px;
            margin-bottom: 20px;
            background-color: white;
            padding-left: 20px;
        } */

        input[type="password"] {
            height: 35px;
            width: 155px;
            font-family: calibri;
            font-size: 14px;
            margin-bottom: 20px;
            background-color: white;
            padding-left: 20px;
        }

        input[type="email"] {
            height: 35px;
            width: 155px;
            font-family: calibri;
            font-size: 14px;
            margin-bottom: 20px;
            background-color: white;
            padding-left: 20px;
        }

        input[type="submit"] {
            padding: 8px 25px;
            font-size: 15px;
            display: inline-block;
            color: white;
            background-color: #0066ff;
            border: none;
            border-radius: 4px;
        }

        input+input {
            margin-left: 10px;
        }

        input[type="submit"] {
            font-family: calibri;
            font-size: 20px;
        }

        /* .container>.a1,
        .a2 {
            text-align: left;
            font-family: tahoma;
            text-decoration: none;
        } */

        .a2 {
            margin-left: 11px;
            font-family: calibri;
        }

        /* .btn-create {
            margin-top: px;
            margin-left: 180px;
            padding: 8px 25px;
            font-size: 17px;
            display: inline-block;
            color: white;
            background-color: #0066ff;
            border: none;
            border-radius: 4px;
        } */

        a+input {
            font-family: calibri;
            margin-left: 120px;
        }

        a+a {

            margin-left: 225px;
        }

        /* td {
            font-family: calibri;
            margin-left: 10px;
            font-size: 15px;
        } */

        .form-input {
            text-align: left;
            padding-left: 30px;
        }
    </style>
</body>

</html>