<?php

// Andmebaasi ühendus
$yhendus = new mysqli("localhost", "root", "", "väikefirma");
if ($yhendus->connect_error) {
    die("Ühendus ebaõnnestus: " . $yhendus->connect_error);
}

