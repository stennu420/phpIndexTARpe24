<?php
$serverinimi='localhost';
$kasutajanimi='stenverlindma';
$parool='123456';
$andmebaasinimi='stenverlindma';
$yhendus= new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset("utf8");
