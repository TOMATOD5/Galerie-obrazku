<!DOCTYPE html>

<html lang="cs-cz">
    <head>
            <meta charset="utf-8" />
            <title>VOLVO VNL 780</title>
            <link rel="stylesheet" href="styl.css" type="text/css" />
            <link rel="stylesheet" href="css/lightbox.css" type="text/css" />
            <script src="js/jquery-1.7.2.min.js"></script>
            <script src="js/jquery-ui-1.8.18.custom.min.js"></script>
            <script src="js/jquery.smooth-scroll.min.js"></script>
            <script src="js/lightbox.js"></script>
    </head>

    <body>
        <h1>VOLVO VNL 780</h1>
        <p>Volvo VN je těžký nákladní vůz vyráběný švédským výrobcem vozidel Volvo Trucks. Původně vyvinutý pro Severní Ameriku. </p>
        <?php
        require_once('tridy/Galerie.php');
        $galerie = new Galerie('obrazky', 5);        
        $galerie->nacti();
        $galerie->vypis();
        
        ?>

            <table style="width:100%">
                <tr>
                    <th>Stav</th>
                    <th>Rok výroby</th>
                    <th>Model</th>
                    <th>Nájezd</th>
                    <th>Typ motoru</th>
                    <th>Výkon motoru</th>
                    <th>Převodovka</th>
                    <th>Počet rychlostí</th>
                    <th>Kapacita nádrže</th>
                </tr>
                <tr>
                    <td>Ojeté</td>
                    <td>2018</td>
                    <td>VNL 780</td>
                    <td>496 606 mil (US)</td>
                    <td>D13</td>
                    <td>550 HP</td>
                    <td>Automatická I Shift</td>
                    <td>12 + 2</td>
                    <td>250 Galonů</td>
                </tr>
            </table>



    </body>
</html>