<html>

<head>
    <title>Gmail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="email.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <script href="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>


</head>

<body>
    <div class="container">
        <img src="<?= base_url('images/logo1.png') ?>">
        <?= $this->session->flashdata('message'); ?>
        <form method="post" action="<?= site_url('login'); ?>">
            <div class="form-input">
                <input type="email" name="email" placeholder="Email"><br>
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div><br><br>
            <a class="a1" href="#">Forgot email?</a><a href="#"></a><br>
            <br><br>
            <a class="a2" href="<?= site_url('login/signup'); ?>">Create account?</a>
            <input type="submit" name="next-login" value="next" class="btn-login">
        </form>
    </div>
    <!--   <div style="text-align: center"></div> -->
    <style>
        body {
            margin: 0;
        }

        .container {
             width: : 100%; 
            /*height: 550px;*/
            /*padding: 0px 0px 0px 0px;*/
            text-align: center;
            /*background-color: white;*/
            border-radius: 8px;
            /* border-width: 150px; */
            /*border: 1px solid black;*/
            margin-top: 10%;
            /*margin-left: 50;*/
            /* margin: 50%; */
        }

        .container img {
            width: 190px;
            height: 125px;
            margin-top: 60px;
            margin-bottom: 45px;
        }

        input[type="email"] {
            height: 45px;
            width: 300px;
            font-family: tahoma;
            font-size: 15px;
            margin-bottom: 20px;
            background-color: white;
            padding-left: 20px;
        }

        .container>.a1,
        .a2 {
            text-align: left;
            font-family: tahoma;
            text-decoration: none;
        }

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

        a+a {
            margin-left: 198px;
        }

        td+td {
            font-family: tahoma;
            margin-left: 10px;
            font-size: 15px;
        }
    </style>
</body>

</html>