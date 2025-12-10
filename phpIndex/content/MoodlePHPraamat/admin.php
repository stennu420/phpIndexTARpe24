<?php

$yhendus = new mysqli("localhost", "stenverlindma", "", "goldtime");
if ($yhendus->connect_error) {
    die("Ühendus andmebaasiga ebaõnnestus: " . $yhendus->connect_error);
}
$yhendus->set_charset("utf8");

global $yhendus;
// Uue toote lisamine
if ( isset($_REQUEST["uusleht"]) ) {
    if ( !empty(trim($_REQUEST["pealkiri"]))) {
        $kask = $yhendus->prepare("INSERT INTO lehed (pealkiri, sisu, kuupaev, pilt) VALUES (?, ?, ?, ?)");
        $kask->bind_param ("ssss", $_REQUEST["pealkiri"], $_REQUEST["sisu"], $_REQUEST["kuupaev"], $_REQUEST["pilt"]);
        $kask->execute();
        header("Location: admin.php");
        $yhendus->close();
        exit();
    }
}

//Teate kustutamine
if (isset($_REQUEST["kustusid"])) {
    $kask = $yhendus->prepare("DELETE FROM lehed WHERE pealkiri=?,sisu=?, kuupaev=?, pilt=? WHERE pealkiri=?");
    $kask->bind_param("i", $_REQUEST["kustusid"]);
    $kask->execute();
}

// Teate muutmine

if (isset($_REQUEST["muutmised"])) {
    $kask = $yhendus->prepare("DELETE FROM lehed WHERE pealkiri=?,sisu=?, kuupaev=?, pilt=? WHERE pealkiri=?");
    $kask->bind_param(
        "sssi",
        $_REQUEST["pealkiri"],
        $_REQUEST["sisu"],
        $_REQUEST["kuupaev"],
        $_REQUEST["pilt"],
        $_REQUEST["muutmisid"]
    );
    $kask->execute();
}

//Pilt text
if (isset($_REQUEST[""])) {
    $kask = $yhendus->prepare("INSERT INTO lehed (pealkiri, sisu, kuupaev, pilt) VALUES (?, ?, ?, ?)");
    $kask->bind_param("s", $_REQUEST["pealkiri"], $_REQUEST["sisu"], $_REQUEST["kuupaev"], $_REQUEST["autor"]);
    $kask->execute();
    header("Location: " . $_SERVER["PHP_SELF"]);
    $yhendus->close();
    exit();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Teated lehel</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <style type="text/css">
        #menyykiht {
            float: left;
            padding-right: 30px;
        }
        #sisukiht {
            float: left;
        }
        #jalusekiht {
            clear: left;
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
<div id="menyykiht">
    <h2>Teated</h2>
    <ul>
        <?php
        //loendi kuvamine
        $kask = $yhendus->prepare(
            "SELECT  pealkiri FROM lehed"
        );
        $kask->bind_result($id, $pealkiri);
        $kask->execute();
        while ($kask->fetch()) {
            echo "<li><a href='".$_SERVER["PHP_SELF"].
                "?id=$id'>".htmlspecialchars($pealkiri)."</a></li>";
        }
        ?>
    </ul>
    <a href="<?=$_SERVER['PHP_SELF']?>?lisamine=jah">Lisa ...</a>
</div>

<div id="sisukiht">
    <?php
    //Ühe teate kuvamine või muutmine
    // Ühe teate kuvamine või muutmine
    if (isset($_REQUEST["id"])) {
        $kask = $yhendus->prepare("SELECT id, pealkiri, sisu, kuupaev, autor, pilt FROM lehed WHERE id=?");
        $kask->bind_param("i", $_REQUEST["id"]);
        $kask->bind_result($id, $pealkiri, $sisu, $kuupaev, $autor, $pilt);
        $kask->execute();

        if ($kask->fetch()) {
            if (isset($_REQUEST["muutmine"])) {
                echo "
                   <form action='".$_SERVER["PHP_SELF"]."'>
                     <input type='hidden' name='muutmisid' value='$id'/>
                     <h2>Teate muutmine</h2>
                     <dl>
                       <dt>Pealkiri:</dt>
                       <dd>
                         <input type='text' name='pealkiri' value='".
                    htmlspecialchars($pealkiri)."'/>
                       </dd>
                       <dt>Teate sisu:</dt>
                       <dd>
                         <textarea rows='20' cols='30' name='sisu'>".
                    htmlspecialchars($sisu)."</textarea>
                       </dd>
                       <dt>Kuupäev:</dt>
                       <dd>
                         <input type='date' name='kuupaev' value='".
                    htmlspecialchars($kuupaev)."'/>
                       </dd>
                       <dt>Autor:</dt>
                       <dd>
                         <input type='text' name='autor' value='".
                    htmlspecialchars($autor)."'/>
                       </dd>
                       <dt>Pilt:</dt>
                       <dd>
                         <input type='text' name='pilt' value='".
                    htmlspecialchars($pilt)."'/>
                       </dd>
                     </dl>                      
                     <input type='submit' value='Muuda' />
                   </form>
                ";
            } else {
                echo "<h2>".htmlspecialchars($pealkiri)."</h2>";
                echo "Lehe sisu".htmlspecialchars($sisu);
                echo "<br>";
                echo"Lisamise kuupäev:" .htmlspecialchars($kuupaev);
                echo "<br>";
                echo"Autor:" .htmlspecialchars($autor);
                echo "<br>";
                if (!empty($pilt)) {
                    echo "<br><img src='".htmlspecialchars($pilt)."' alt='Pilt' style='max-width:300px;'><br>";
                }
                echo "<br /><a href='".$_SERVER["PHP_SELF"].
                    "?kustutusid=$id'>kustuta</a> ";
                echo "<a href='".$_SERVER["PHP_SELF"].
                    "?id=$id&amp;muutmine=jah'>muuda</a>";
            }
        } else {
            echo "Vigased andmed.";
        }
    }
?>



