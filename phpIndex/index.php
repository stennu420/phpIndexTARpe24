<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Stenver PHP-tööde leht</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style..css"
    <srcipt src="js/Joonistamiscript.js"></srcipt>
</head>
<body>
<?php
//päis
include("header.php")
?>
<?php
//navigeerimismenüü
include("nav.php");
?>
<div class="flex-container">
    <div>
        <div><strong>PHP - </strong>
            PHP skript teeb oma tööd pärast seda, kui toimus mingi sündmus.
            Orienteeritud programmeerija eesmärkide saavutamiseks (mugavus on tähtsam kui vastavus standarditele).
            Serveripoolne keel.
            Platvormist sõltumatu.
            Saab kasutada nii HTML-i sees (HTML embedded), kui ka eraldiseisvana skriptina. </div>
    </div>
        <?php
        //sisu - laetakse contetn kaustast
        if(isset($_GET["leht"])){
            include('contetn/'.$_GET["leht"]);
        }
        ?>
    </div>

    <div>
        <img src="image/PHP-logo.svg.png" alt="PHP pilt">
    </div>
</div>

<?php
//jalus
include("footer.php");
?>
</body>
</html>

