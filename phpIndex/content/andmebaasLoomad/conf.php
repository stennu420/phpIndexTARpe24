<?php
$serverinimi='localhost';
$kasutajanimi='stenverlindma';
$parool='12345';
$andmebaasinimi='stenverlindma';
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset("utf8");
/*zone.ee andmebaasi seadistamine
$serverinimi='d141154.mysql.zonevs.eu';
$kasutajanimi=d141154_stenverlindma
$andmebaasinimi=
