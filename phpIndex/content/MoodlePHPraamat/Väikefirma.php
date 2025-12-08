<?php
require('config.php');

// Toote lisamine
if (isset($_POST["lisa"])) {
    $kask = $yhendus->prepare("INSERT INTO tooted (nimetus, kirjeldus, hind, pilt) VALUES (?, ?, ?, ?)");
    $kask->bind_param("ssis", $_POST["nimetus"], $_POST["kirjeldus"], $_POST["hind"], $_POST["pilt"]);
    $kask->execute();
    header("Location: avaleht.php");
    exit();
}

// Toote kustutamine
if (isset($_GET["kustuta"])) {
    $kask = $yhendus->prepare("DELETE FROM tooted WHERE id=?");
    $kask->bind_param("i", $_GET["kustuta"]);
    $kask->execute();
}

// Toote muutmine
if (isset($_POST["muuda"])) {
    $kask = $yhendus->prepare("UPDATE tooted SET nimetus=?, kirjeldus=?, hind=?, pilt=? WHERE id=?");
    $kask->bind_param("ssisi", $_POST["nimetus"], $_POST["kirjeldus"], $_POST["hind"], $_POST["pilt"], $_POST["id"]);
    $kask->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>GoldTime</title>
    <link rel="stylesheet" href="väikefirma.style.css">
</head>
<body>
<header>
    <h1>GoldTime</h1>
    <nav>
        <a href="avaleht.php">Avaleht</a>
        <a href="hinnakiri.php">Hinnakiri</a>
    </nav>
</header>

<div class="container">
    <h2>Meie tooted</h2>
    <div class="products">
        <?php
        $kask = $yhendus->prepare("SELECT id, nimetus, kirjeldus, hind, pilt FROM tooted");
        $kask->bind_result($id, $nimetus, $kirjeldus, $hind, $pilt);
        $kask->execute();
        while ($kask->fetch()): ?>
            <div class="product-card">
                <?php if(!empty($pilt)) echo "<img src='$pilt' alt='$nimetus'>"; ?>
                <h3><?= htmlspecialchars($nimetus) ?></h3>
                <p><?= htmlspecialchars($kirjeldus) ?></p>
                <p><?= $hind ?> €</p>
            </div>
        <?php endwhile; ?>
    </div>
</div>

</body>
</html>
<?php $yhendus->close(); ?>
