<!DOCTYPE html>
<html lang="pl">

<head>
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
    <title>Instytut Matematyki PP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div style="width:100%;background-color: #00507b;">
        <div class="favbar">
            <a href="https://hellfire.put.poznan.pl/">VPN</a>
            <a href="https://sin.put.poznan.pl/">SIN</a>
            <a href="https://moodle.put.poznan.pl/">MoodlePP</a>
            <a href="https://elogin.put.poznan.pl/">eLogin</a>
            <a href="https://elogin.put.poznan.pl/email/">ePoczta</a>
            <a href="https://www.put.poznan.pl/" style="border-left: 0px;">PUT</a>
        </div>
    </div>
    <div style="width:100%;background-color: #00618d;">
    <div class="header">
        <div>
            <img src="image/logo_IM.png" style="float: left; margin-left: 0px;" />
        </div>
        <div >
            <h1 style="font-size: xx-large;">Instytut Matematyki</h1>
            <h2 style="font-size: large; ">Wydział Automatyki, Robotyki i Elektrotechniki</h2>
            <h2 style="font-size: large; ">Politechnika Poznańska</h2>
        </div>
        <div style="margin-left:auto; margin-right:0;">
            <img class="logo" src="image/logo_WARiE.png" style=" width: 100px; margin-top:10px" />
            <img class="logo" src="image/logo_PP.png" style="float: right;" />
        </div>

    </div>
    </div>
    <div style="width:100%;background-color: #00618d; position: -webkit-sticky;position: sticky;top:0">
    <div class="navbar">
        <ul>
            <a href="#"><li>Instytut
                    <ul>
                        <a href="#"><li>Władze</li></a>
                        <a href="zaklady.php"><li>Zakłady</li></a>
                        <a href="#"><li>Historia</li></a>
                        <a href="#"><li>Tytuły i&nbspstopnie naukowe</li></a>
                        <a href="#"><li>Kontakt</li></a>
                    </ul>
                </li>
            </a>
            <a href="#"><li>Pracownicy
                    <ul>
                        <a href="#"><li>Skład osobowy</li></a>
                        <a href="#"><li>Dyżury i&nbspkonsultacje</li></a>
                    </ul>
                </li></a>
            <a href="#"><li>Działalność naukowa
                    <ul>
                        <a href="#"><li>Skrypty i&nbspmonografie</li></a>
                        <a href="#"><li>Konferencje</li></a>
                        <a href="#"><li>Seminaria</li></a>
                        <a href="#"><li>Tematyka naukowo&#8209badawcza</li></a>
                        <a href="#"><li>Projekty</li></a>
                    </ul>
                </li>
            </a>
            <a href="dlastudentow.php"><li>Dla studentów
                    <ul>
                        <a href="harmonogramy.php"><li>Harmonogramy</li></a>
                        <a href="#"><li>Kierunek&nbspMatematyka w&nbspTechnice</li></a>
                        <a href="#"><li>Przydatne pliki</li></a>
                    </ul>
            </li></a>
            <a href="#"><li>Szkolenia i&nbspkursy</li></a>
            <a href="aktualnosci.php"><li >Aktualności</li></a>
            <a href="http://math.put.poznan.pl/fasciculi_m.htm"><li style="background-color: #d873a6;margin-right: 0"><i>Fasciculi Mathematici</i></li></a>
        </ul>
    </div>
    </div>


<div class="content_background">
    <div class="content">
        <table class="tabela_pracownicy">
            <tbody>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-y1rm">Zakład</td>
                <td class="tg-y1rm">Pokój</td>
                <td class="tg-y1rm">Telefon</td>
                <td class="tg-y1rm">e-mail / www</td>
            </tr>
            <tr>
                <td class="tg-euj1" colspan="6">Profesorowie:</td>
            </tr>
            <tr>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
            </tr>
            <tr>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
            </tr>
            <tr>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
                <td class="tg-73oq"></td>
            </tr>
            </tbody>
        </table>
    </div>

    <?php
    $file = fopen("aktualnosci.txt","r");
    while(!feof($file)) {
        echo fgets($file)."<br>";
    }
    fclose($file);
    ?>

</div>
<div class="footer">
    <p style="margin-left: 10%;">&copy Instytut Matematyki | Wykonanie: Jarosław Derda</p>
</div>
</body>
</html>

