<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Instytut Matematyki PP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="shortcut icon" href="image/logo_IM.png" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="image/logo_IM.png"/>
    <link rel="icon" type="image/x-icon" href="image/logo_IM.png"/>
    <link rel="icon" href="image/logo_IM.png" />
</head>

<script>
    function openPage(ButtonName,MenuName,Button2Name) {
        var i, buttons, divs;
        buttons = document.querySelectorAll(".dropdownButton,.dropBtn");
        for (i = 0; i < buttons.length; i++) {
            buttons[i].style.backgroundColor = "";
            buttons[i].style.color = "";
        }
        divs = document.querySelectorAll(".secondary_menu")
        for (i=0; i<divs.length;i++){
            divs[i].style.display = "";
        }
        document.getElementById(Button2Name).style.backgroundColor = "#fff";
        document.getElementById(Button2Name).style.color = "#00507b";
        document.getElementById(MenuName).style.display="block";
        document.getElementById(ButtonName).style.backgroundColor = "#00507b";
    }
</script>
<ul class="favnav">
    <li style="float:left;"><a href="#"><img src="image/flag_BG.png" style="height: 15px" alt="GB"/> </a></li>
    <li style="float:left;"><a href="#"><img src="image/flag_PL.png" style="height: 15px" alt="PL"/> </a> </li>
    <li><a href="https://hellfire.put.poznan.pl/">VPN</a></li>
    <li><a href="https://sin.put.poznan.pl/">SIN</a></li>
    <li><a href="https://moodle.put.poznan.pl/">MoodlePP</a></li>
    <li><a href="https://elogin.put.poznan.pl/">eLogin</a></li>
    <li><a href="https://elogin.put.poznan.pl/email/">ePoczta</a></li>
    <li><a href="https://www.put.poznan.pl/">PUT</a></li>
</ul>
<div class="header">
    <div class="logo_IM">
        <a href="index.php"><img src="image/logo_IM.png" alt="Instytut Matematyki"/>
    </div>
    <div class="name_IM">
        <h1 >Instytut Matematyki</h1>
        <h3 >Wydział Automatyki, Robotyki i Elektrotechniki </h3>
        <h3>Politechnika Poznańska</h3>
    </div></a>
    <div class="logo_PP_WARiE">
        <a href="http://www.fee.put.poznan.pl/"><img src="image/logo_WARiE.png" alt="Wydział Automatyki, Robotyki i Elektrotechniki" style="width: 100px; margin-top: 20px"/></a>
            <a href="https://www.put.poznan.pl/" ><img src="image/logo_PP.png" alt="Politechnika Poznańska"/></a>
    </div>
</div>
<div class="menu">
    <div class="primary_menu">
        <div class="dropdown">
            <button class="dropdownButton" id="InstytutButton" onclick="location.href='instytut/wladze.php'">Instytut</button>
        </div>
        <div class="dropdown">
            <button class="dropdownButton" id="PracownicyButton" onclick="location.href='pracownicy/skladosobowy.php'">Pracownicy</button>
        </div>
        <div class="dropdown">
            <button class="dropdownButton" id="DlaStudentowButton" onclick="location.href='dlastudentow/harmonogramy.php'">Dla studentów</button>
        </div>
        <div class="dropdown">
            <button class="dropdownButton" id="NaukaIDydaktykaButton" onclick="location.href='naukaidydaktyka/tytulystopnienaukowe.php'">Nauka i dydaktyka</button>
        </div>
        <div class="dropdown">
            <button class="dropdownButton" id="SzkoleniaIKursyButton" onclick="location.href='main/szkoleniaikursy.php'">Szkolenia i&nbspkursy</button>
        </div>
        <div class="dropdown">
            <button class="dropdownButton" id="AktualnosciButton" onclick="location.href='main/aktualnosci.php'">Aktualności</button>
        </div>
        <div class="dropdown">
            <button class="dropBtn_fas" onclick="location.href='http://math.put.poznan.pl/fasciculi_m.htm'"><i>Fasciculi Mathematici</i></button>
        </div>
    </div>

    <div class="secondary_menu" style="display: block; height: 44px">
         </div>
</div>
<div class="content">
    Start
</div>

<div class="footer">
    <p style="margin-left: 10%;">&copy Instytut Matematyki | Wykonanie: Jarosław Derda</p>
</div>
</body>
</html>