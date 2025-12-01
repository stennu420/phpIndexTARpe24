<?php
require('conf.php');
//Lisamine
global $yhendus;
if(isset($_REQUEST["loomanimi"]) && $_REQUEST["loomanimi"]!==0){
    $kask = $yhendus->prepare("INSERT INTO loomad(loomanimi, kaal, varv) VALUES(?,?,?)");
    $kask->bind_param("sis",$_REQUEST["loomanimi"], $_REQUEST["kaal"], $_REQUEST["varv"]);
    //s -string, i-integer
    $kask->execute();
    header("Location:loomadeKuvamine.php");
}
//i -integer, s-string
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Loomade lisamine SQL tabeli sisse</title>
    <link rel="stylesheet" href="andmebaasStyle.css">
</head>
<body>
<h1>
    Looma lisamine
</h1>
<from action="" name="loom">
<table>
    <tr>
        <lable for="loomanimi">Sisesta looma nimi</lable>
        <input type="text" name="loomanimi" id="loomanimi">
        <br>
        <label for="kaal">Kaal</label>
        <input type="number" name="kaal" id="kaal">kg
        <br>
        <label for="varv">Looma värav</label>
        <input type="color" name="varv" id="varv">
        <br>
        <input type="submit" value="Lisa">
    </tr>
</table>
</from>
</body>
</html>
