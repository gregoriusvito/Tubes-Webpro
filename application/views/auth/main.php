<html>

<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="icon" href="logo_head.png" type="image/gif">
    <title>Inbox</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <script href="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>

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

        /*.topnav a:hover {
  background-color: grey;
  color: black;
}*/

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

        .span {
            text-align: left;
        }

        .span+a {
            padding-top: 0px;
            margin-left: -11px;
            font-size: 0px;
        }

        /*.span:hover{
  padding-top: 19px;
  background-color: grey;
  border-radius: 50px;
  height: 4px;
  width: 6px;
  background-position: center;
  transition: 0.5s ease;
}*/
        html,
        body {
            height: 100%;
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
        /*table{
  padding-left: 50px;
}*/
        .trtd td+td {
            padding-right: 30px;
            vertical-align: middle;
        }

        #output_div {
            border: 0.5px;
            /*background-color: black;*/
            border-top: 0.5px solid #edeeef;
            border-bottom: 0.5px solid #edeeef;
            border-collapse: separate;
            border-spacing: 10px;
            padding-left: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: 60px;
        }

        .from {
            display: inline-block;
            width: 99px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .isi {
            display: inline-block;
            width: 1500px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /*--------------------*/
        .send {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;

            max-width: 500px;
            padding: 10px;
            background-color: white;
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
            <a href="#" onclick="Tabelisi()" style="padding-top: 27px; margin:auto;">dukungan</a>
        </nav>

        <!-- <hr> -->

        <div id="mySidenav" class="sidenav" style="text-align: left" onmouseover="hoversideNav(1)" onmouseout="hoversideNav(2)">
            <table>
                <tr onclick="newMsg()" style="cursor: pointer;">
                    <td><img class="newmsg" src="<?= base_url('images/newmsg.png') ?>"></td>
                    <td><a>New Message</a></td>
                </tr>
                <tr>
                    <td><img class="sideimg" src="<?= base_url('images/inboxico.png') ?>"></td>
                    <td><a href="#">Inbox</a></td>
                </tr>
                <tr>
                    <td><img class="sideimg" src="<?= base_url('images/starico.png') ?>"></td>
                    <td><a href="#">Stared</a></td>
                </tr>
                <tr>
                    <td><img class="sideimg" src="<?= base_url('images/sentico.png') ?>"></td>
                    <td><a href="#">Sent Mail</a></td>
                </tr>
                <tr>
                    <td><img class="sideimg" src="<?= base_url('images/drafico.png') ?>"></td>
                    <td><a href="#">Draf</a></td>
                </tr>
            </table>
        </div>

        <div id="sendmsg" class="send">
            <form>
                <p><b>New Message</b> <button type="button" class="btn cancel" onclick="clsMsg()">Close</button>x</p>

                <input type="text" placeholder="Recipient name" rec_email" required></br>

                <input type="text" placeholder="Subject" name="subject"></br>

                <textarea rows="15" cols="40" id="isiEmail"> </textarea></br>

                <button type="submit" class="btn" onclick="sentMsg()">Sent</button>

            </form>
        </div>

        <table bgcolor="white" id="output_div"></table>
    </div><br>



    <script>
        var x = 1;
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

        function Tabelisi(isi) {

            outputHTML += "<tr><td width='15'><input type='checkbox'></td>";
            outputHTML += "<td><b class='from'>Spotify </b></td>";
            outputHTML += "<td><b class='isi'>" + isi + "</b></td>";
            outputHTML += "<td width='100'><b> 19 april </b></td>";
            outputHTML += "</tr>";

            document.getElementById("output_div").innerHTML = outputHTML;
        }

        function newMsg() {
            document.getElementById("sendmsg").style.display = "block";
        }

        function clsMsg() {
            document.getElementById("sendmsg").style.display = "none";
        }

        function sentMsg() {
            isi = document.getElementById("isiEmail").value;
            Tabelisi(isi);
            // clsMsg();
        }
    </script>

</body>

</html>