<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Instytut Matematyki PP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/style.css"/>
    <link rel="shortcut icon" href="../image/logo_IM.png"/>
    <link rel="icon" type="image/vnd.microsoft.icon" href="../image/logo_IM.png"/>
    <link rel="icon" type="image/x-icon" href="../image/logo_IM.png"/>
    <link rel="icon" href="../image/logo_IM.png"/>
</head>
<script>
    function goToTable(elementName) {
        document.getElementById(elementName).scrollIntoView({
            behavior: "smooth",
            block: "center",
            inline: "center"
        });
    }
</script>
<body onload="openPage('InstytutButton','secondary_menu_1','zakladyButton')">
<?php include('../main/menu.php'); ?>
<div class="content">
    <div class="grid-container">
        <div class="grid-item">
            <table class="zakladTableButton" onclick="goToTable('Zaklad1')">
                <tbody>
                <tr>
                    <td class="zakladTableSymbol" rowspan="2">Z1</td>
                    <td class="zakladTableNazwa">Zakład Analizy Matematycznej</td>
                </tr>
                <tr>
                    <td class="zakladTableKierownik">Kierownik: dr hab. inż. Paweł Kolwicz, profesor PP</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="grid-item">
            <table class="zakladTableButton" onclick="goToTable('Zaklad2')">
                <tbody>
                <tr>
                    <td class="zakladTableSymbol" rowspan="2">Z2</td>
                    <td class="zakladTableNazwa">Zakład Analizy Funkcjonalnej i Numerycznej</td>
                </tr>
                <tr>
                    <td class="zakladTableKierownik">Kierownik: prof. dr hab. Ryszard Płuciennik</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="grid-item">
            <table class="zakladTableButton" onclick="goToTable('Zaklad3')">
                <tbody>
                <tr>
                    <td class="zakladTableSymbol" rowspan="2">Z3</td>
                    <td class="zakladTableNazwa">Zakład Równań Różniczkowych i Funkcyjnych</td>
                </tr>
                <tr>
                    <td class="zakladTableKierownik">Kierownik: dr hab. Małgorzata Migda</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="grid-item">
            <table class="zakladTableButton" onclick="goToTable('Zaklad4')">
                <tbody>
                <tr>
                    <td class="zakladTableSymbol" rowspan="2">Z4</td>
                    <td class="zakladTableNazwa">Zakład Zastosowań Matematyki</td>
                </tr>
                <tr>
                    <td class="zakladTableKierownik">Kierownik: prof. dr hab. inż. Ewa Magnucka-Blandzi</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <table class="zakladTable" id="Zaklad1">
        <tbody>
        <tr>
            <td class="zakladTablePuste"></td>
            <td class="zakladTableNazwa" colspan="2">Zakład Analizy Matematycznej</td>
            <td class="zakladTableSymbol" rowspan="2">Z1</td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="3">Kierownik:</td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">dr hab. inż.</td>
            <td class="zakladTableWierszOstatni">Paweł Kolwicz</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Adiunkci:</td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr hab.</td>
            <td class="zakladTableWiersz">Jan Milewski</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Ziemowit Domański</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">dr</td>
            <td class="zakladTableWierszOstatni">Karol Leśnik</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Adiunkci dydaktyczni:</td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Marek Adamczak</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr inż.</td>
            <td class="zakladTableWiersz">King Cichoń</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">dr inż.</td>
            <td class="zakladTableWierszOstatni">Mariola Skorupka</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Asystenci:</td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">mgr</td>
            <td class="zakladTableWiersz">Tomasz Kiwerski</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        </tbody>
    </table>
    <i class="arrow" onclick="window.scrollTo(0,0)"></i>
    <table class="zakladTable" id="Zaklad2">
        <tbody>
        <tr>
            <td class="zakladTablePuste"></td>
            <td class="zakladTableNazwa" colspan="2">Zakład Analizy Funkcjonalnej i Numerycznej</td>
            <td class="zakladTableSymbol" rowspan="2">Z2</td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="3">Kierownik:</td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">prof. dr hab.</td>
            <td class="zakladTableWierszOstatni">Ryszard Płuciennik</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Profesorowie:</td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">prof. dr hab.</td>
            <td class="zakladTableWierszOstatni">Lech Maligranda</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Adiunkci:</td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">dr hab.</td>
            <td class="zakladTableWierszOstatni">Maciej Ciesielski</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Adiunkci dydaktyczni:</td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr inż.</td>
            <td class="zakladTableWiersz">Anna Andruch-Sobiło</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Marian Dondajewski</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr inż.</td>
            <td class="zakladTableWiersz">Karol Gajda</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Jacek Gruszka</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Marian Liskowski</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Piotr Rejmenciak</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr inż.</td>
            <td class="zakladTableWiersz">Barbara Szyszka</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">dr inż.</td>
            <td class="zakladTableWierszOstatni">Zenon Zbąszyniak</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Asystenci:</td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">mgr</td>
            <td class="zakladTableWiersz">Marta Kańczurzewska</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">mgr</td>
            <td class="zakladTableWiersz">Jakub Tomaszewski</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        </tbody>
    </table>
    <i class="arrow" onclick="window.scrollTo(0,0)"></i>
    <table class="zakladTable" id="Zaklad3">
        <tbody>
        <tr>
            <td class="zakladTablePuste"></td>
            <td class="zakladTableNazwa" colspan="2">Zakład Równań Różniczkowych i Funkcyjnych</td>
            <td class="zakladTableSymbol" rowspan="2">Z3</td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="3">Kierownik:</td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">dr hab.</td>
            <td class="zakladTableWierszOstatni">Małgorzata Migda</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Adiunkci:</td>
        </tr>

        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">dr</td>
            <td class="zakladTableWierszOstatni">Alicja Dota</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Adiunkci dydaktyczni:</td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Andrzej Drozdowicz</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Alina Gleska</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Grzegorz Grzegorczyk</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Wiesława Nowakowska</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr inż.</td>
            <td class="zakladTableWiersz">Agnieszka Szawioła</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Małgorzata Zbąszyniak</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        </tbody>
    </table>
    <i class="arrow" onclick="window.scrollTo(0,0)"></i>
    <table class="zakladTable" id="Zaklad4">
        <tbody>
        <tr>
            <td class="zakladTablePuste"></td>
            <td class="zakladTableNazwa" colspan="2">Zakład Zastosowań Matematyki</td>
            <td class="zakladTableSymbol" rowspan="2">Z4</td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="3">Kierownik:</td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">prof. dr hab. inż.</td>
            <td class="zakladTableWierszOstatni">Ewa Magnucka-Blandzi</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Profesorowie uczelni:</td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">dr hab.</td>
            <td class="zakladTableWierszOstatni">Karol Andrzejczak</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Adiunkci:</td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr hab.</td>
            <td class="zakladTableWiersz">Katarzyna Filipiak</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Ewa Bakinowska</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Kamil Świątek</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Leszek Wittenbeck</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">dr</td>
            <td class="zakladTableWierszOstatni">Agnieszka Ziemkowska-Siwek</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Adiunkci dydaktyczni:</td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Anna Iwaszkiewicz-Rudoszańska</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">dr</td>
            <td class="zakladTableWiersz">Barbara Popowska</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWierszOstatni"></td>
            <td class="zakladTableWierszOstatni">dr</td>
            <td class="zakladTableWierszOstatni">Zbigniew Walczak</td>
            <td class="zakladTableWierszOstatni"></td>
        </tr>
        <tr>
            <td class="zakladTableNaglowek" colspan="4">Asystenci:</td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">mgr</td>
            <td class="zakladTableWiersz">Mateusz John</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">mgr</td>
            <td class="zakladTableWiersz">Robert Salamon</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        <tr>
            <td class="zakladTableWiersz"></td>
            <td class="zakladTableWiersz">mgr inż.</td>
            <td class="zakladTableWiersz">Marcin Stasiak</td>
            <td class="zakladTableWiersz"></td>
        </tr>
        </tbody>
    </table>
    <i class="arrow" onclick="window.scrollTo(0,0)"></i>
</div>
<div class="footer">
    <p style="margin-left: 10%;">&copy Instytut Matematyki | Wykonanie: Jarosław Derda</p>
</div>
</body>
</html>