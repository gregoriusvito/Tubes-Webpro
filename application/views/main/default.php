<html>

<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="icon" href="logo_head.png" type="image/gif">
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <script href="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <title>Sent Mail</title>
    <style>
        body {
            font-family: "Lato", sans-serif;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .fit {
            text-align: left;
        }

        .topnav {
            /*max-width: 10;*/
            border: 1.5px solid;
            border-color: #f2f3f4;
            padding-bottom: 25px;
            /*display: inline-block;*/
        }

        .topnav a {
            /* float: left;*/
            color: black;
            text-align: center;
            padding: 21px 17px;
            text-decoration: none;
            font-size: 15px;
        }

        nav {
            padding-bottom: 20px;
        }


        .topnav a.active {
            background-color: white;
            color: black;
        }

        a+a {
            margin-left: 30px;
        }

        .navGmail {
            padding-top: 5px;
            margin-top: 5px;
            width: 112px;
            height: 31px;
        }

        a .search {
            padding: 7px 5px;
            width: 700px;
            cursor: auto;
            background: #f2f3f4;
            font-size: 17px;
            border-radius: 5px;
            border-color: #f2f3f4;
        }

        .searchImg {
            height: 15px;
            width: 15px;
        }

        .avatarImg {
            border-radius: 50%;
            height: 27px;
            width: 27px;
            margin-right: 30px;
        }

        .span {
            text-align: left;
        }

        .span+a {
            padding-top: 0px;
            margin-left: -11px;
            font-size: 0px;
        }

        html,
        body {
            height: 100%;
            width: 100%;
        }

        /*//////////////////////////////*/

        .sidenav {
            /*border: 1px solid;*/
            height: 100%;
            width: 18;
            position: fixed;
            z-index: 1;
            top: 82.5px;
            left: 18;
            background-color: white;
            overflow-x: hidden;
            transition: 0.6s;
            padding-top: 0px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-align: left;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        #mySidenav {
            width: 20px;

        }

        .newmsg {
            height: 15px;
            width: 19px;
        }

        .sideimg {
            height: 15px;
            width: 15px;
            left: 0;
        }

        /*---------------*/

        .trtd td+td {
            padding-right: 30px;
            vertical-align: middle;
        }

        #output_div {
            border: 0.5px;
            border-top: 0.5px solid #edeeef;
            border-bottom: 0.5px solid #edeeef;
            border-collapse: separate;
            border-spacing: 10px;
            padding-left: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: 60px;
            width: 100%;
        }

        .from {
            display: inline-block;
            width: 180px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .inbox {
            display: inline-block;
            width: 1400px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /*--------------------*/
        b+a {
            padding-left: 180px;
        }

        .popAvat {
            height: 150px;
            width: 340px;
            display: none;
            float: right;
            border: 1.5px solid #f2f3f4;
        }

        .avatar {
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }

        .popAvat table {
            padding: 15px;
        }

        .logout {
            cursor: pointer;
            padding: 6px 18px;
            font-size: 15px;
            display: inline-block;
            color: white;
            background-color: #db2d1a;
            border: none;
            border-radius: 4px;
            font-size: 12px;
        }

        .chgpass {
            cursor: pointer;
            font-size: 12px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="fit">
        <nav class="topnav">
            <a class="span"><span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
            <a href="#n" onClick="window.location.reload();return false;"><img src="<?= base_url('images/navGmail.png') ?>" class="navGmail"></a>
            <a href="#contact"><img src="<?= base_url('images/search.png') ?>" class="searchImg"> <input type="text" placeholder="Telusuri email" name="search" class="search"> </a>
            <a href="#" onclick="popupAvat()" style="padding-top: 27px; float: right;"><img class="avatarImg" src="<?= base_url('images/img_avatar.png') ?>"> </a>
            <a href="#" style="padding-top: 27px; float: right;">dukungan</a>
        </nav>

        <!-- <hr> -->

        <div id="mySidenav" class="sidenav" style="text-align: left" onmouseover="hoversideNav(1)" onmouseout="hoversideNav(2)">
            <table>
                <tr onclick="location.href='<?= site_url('login/message'); ?>'" style="cursor: pointer;">
                    <td><img class="newmsg" src="<?= base_url('images/newmsg.png') ?>"></td>
                    <td><a>New Message</a></td>
                </tr>
                <tr onclick="location.href='<?= site_url('login/getmessage'); ?>'">
                    <td><img class="sideimg" src="<?= base_url('images/inboxico.png') ?>"></td>
                    <td><a href="#">Inbox</a></td>
                </tr>
                <tr>
                    <td><img class="sideimg" src="<?= base_url('images/starico.png') ?>"></td>
                    <td><a href="#">Stared</a></td>
                </tr>
                <tr onclick="location.href='<?= site_url('login/sentmail'); ?>'">
                    <td><img class="sideimg" src="<?= base_url('images/sentico.png') ?>"></td>
                    <td><a href="#">Sent Mail</a></td>
                </tr>
                <tr>
                    <td><img class="sideimg" src="<?= base_url('images/drafico.png') ?>"></td>
                    <td><a href="#">Draf</a></td>
                </tr>
            </table>
        </div>

        <div class="popAvat" id="popAvat">
            <table>
                <tr>
                    <td> <img class="avatar" src="<?= base_url('images/img_avatar.png') ?>"></td>
                    <td> name</td>
                </tr>
                <tr>
                    <td><a class="chgpass" onclick="location.href='<?= site_url('login/chgpass'); ?>'" style="text-align: right;">Change Password</a></td>
                    <td><a onclick="location.href='<?= site_url('login/logout'); ?>'"><button class="logout">LOGOUT</button></a></td>
                </tr>
                <tr>
                    <td><a onclick=""><u> Delete Account</u></a> </td> <td></td>
                </tr>
            </table>
        </div>

        <table bgcolor="#edeeef" id="output_div" method="post">
            <tr>
                <?php foreach ($mail as $m) : ?>
                    <td name="from" class="from" width='10%'><?= $m['sender'] ?></td>
                    <td name="text" class="inbox" width='100%'><?= $m['text'] ?> </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div><br>

    <script>
        var x = 1;
        var y = 1;
        var isi = "";
        var outputHTML = "";

        function openNav() {

            if (x == 1) {
                document.getElementById("mySidenav").style.width = "230px";
                x = 2;
            } else if (x == 2) {
                document.getElementById("mySidenav").style.width = "18";
                x = 1;
            }
        }

        function hoversideNav(x) {
            if (x == 1) {
                document.getElementById("mySidenav").style.width = "230px";
            } else if (x == 2) {
                document.getElementById("mySidenav").style.width = "18";
            }
        }

        // function Tabelisi(isi) {

        //     outputHTML += "<tr><td width='15'><input type='checkbox'></td>";
        //     outputHTML += "<td><b class='from'>Spotify </b></td>";
        //     outputHTML += "<td><b class='isi'>" + isi + "</b></td>";
        //     outputHTML += "<td width='100'><b> 19 april </b></td>";
        //     outputHTML += "</tr>";

        //     document.getElementById("output_div").innerHTML = outputHTML;
        // }

        function popupAvat() {
            if (y == 1) {
                document.getElementById("popAvat").style.display = "block";
                y = 2;
            } else if (y == 2) {
                document.getElementById("popAvat").style.display = "none";
                y = 1;
            }
        }
    </script>

</body>

</html>