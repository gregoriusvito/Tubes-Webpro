<html>

<head>
    <link rel="icon" href="logo_head.png" type="image/gif">
    <title>Compose</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <script href="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
</head>

<body>

    <div class="topnav">
        <a class="active">Compose</a>
        <a class="navGmail" href="<?= site_url('login/getmessage'); ?>"><img src="<?= base_url('images/newMessage.png') ?>"></a>
    </div>

    <div id="sendmsg" action="<?php site_url('login/message') ?>" class="send">
        <form method="post" class="insidsend">
            <?= $this->session->flashdata('message'); ?><br>

            <input type="email" placeholder="Recipient email" name='receiver'><br>
            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>

            <input type="text" placeholder="Subject" name="subject"><br>
            <?= form_error('text', '<small class="text-danger">', '</small>'); ?>

            <textarea name="message" rows="15" cols="40" id="isiEmail" placeholder="Message here.."> </textarea><br>
            <?= form_error('message', '<small class="text-danger">', '</small>'); ?>

            <div><button class="btn" type="submit">Sent</button></div>

        </form>
    </div>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        /*a.active{
            color: white;
            font-size: 100px;
        }*/

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            padding-left: 35px;
            padding-top: 15px;
            padding-bottom: 15px;
            float: left;
            color: #f2f2f2;
            text-align: center;
            /*padding: 14px 16px;*/
            text-decoration: none;
            font-size: 17px;
        }

        .navGmail img {
            height: 30px;
            width: 40px;
            cursor: pointer;
            /*text-align: center;*/
        }

        .active+.navGmail {
            padding-left: 42.5%;
        }

        /*--------------------*/
        .send {
            background-color: #f2f2f2;
            padding-left: : 30px;
            height: 100%;
            width: 100%;
        }

        .insidesend {
            margin-right: 10%;
        }

        input[type=text],
        input[type=email] {
            width: 100%;
            padding: 20px;
            border-top: 0.5px solid #f2f3f4;
            border-bottom: 0.5 solid #f2f3f4;
        }

        textarea {
            width: 100%;
            height: 65%;
            padding: 20px;
            border-top: 0.5px solid #f2f3f4;
            border-bottom: 0.5 solid #f2f3f4;
        }

        input[type="submit"] {
            font-family: calibri;
            font-size: 20px;
        }

        .btn {
            padding: 8px 25px;
            font-size: 17px;
            display: inline-block;
            color: white;
            background-color: #0066ff;
            border: none;
            border-radius: 5px;
        }

        .send div {
            padding-top: 30px;
            text-align: center;
        }
    </style>
</body>

</html>