<?php
// Näidis tooted
$tooted = [
    ["nimetus"=>"Kuldne käekell", "hind"=>"499", "pilt"=>"images/kuldnekell.webp"],
    ["nimetus"=>"Hõbesõrmus", "hind"=>"149", "pilt"=>"images/hõbesõrmus.webp"],
    ["nimetus"=>"Kaelakee", "hind"=>"199", "pilt"=>"images/kaelakee.jpg"],
    ["nimetus"=>"Pulmasõrmus", "hind"=>"299", "pilt"=>"images/pulmasõrmus.jpg"]
];
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Goldtime – Tooted</title>
    <link rel="stylesheet" href="väikefirma.style.css">
</head>
<body>
<header>
    <h1>Goldtime</h1>
    <nav>
        <a href="Väikefirma.php">Kirjeldus</a>
        <a href="hinnakiri.php">Hinnakiri</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<div class="container">
    <h2>Meie tooted</h2>
    <div class="products">
        <?php foreach($tooted as $t): ?>
            <div class="product-card">
                <img src="<?= $t['pilt'] ?>" alt="<?= $t['nimetus'] ?>">
                <h3><?= $t['nimetus'] ?></h3>
                <p><?= $t['hind'] ?> €</p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
