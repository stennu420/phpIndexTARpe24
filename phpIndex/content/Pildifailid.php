<div>
    <form method="post" action="">
        <select name="pildid">
            <option value="">Vali pilt</option>
            <?php
            // Kuna galerii.php on context/ kaustas
            $kataloog = '../image';

            if(is_dir($kataloog)) {
                $asukoht = opendir($kataloog);
                while($rida = readdir($asukoht)){
                    if($rida!='.' && $rida!='..'){
                        // Kontrollime, kas fail on pilt
                        $laiend = strtolower(pathinfo($rida, PATHINFO_EXTENSION));
                        if(in_array($laiend, array('jpg', 'jpeg', 'png', 'gif'))){
                            echo "<option value='$rida'>$rida</option>\n";
                        }
                    }
                }
                closedir($asukoht);
            }
            ?>
        </select>
        <input type="submit" value="Vaata">
    </form>
</div>

<?php
if(!empty($_POST['pildid'])){
    $pilt = $_POST['pildid'];
    // HTML jaoks ilma ../
    $pildi_aadress = 'image/'.$pilt;
    // PHP jaoks koos ../
    $pildi_aadress_php = '../image/'.$pilt;

    if(file_exists($pildi_aadress_php)) {
        $pildi_andmed = getimagesize($pildi_aadress_php);

        $laius = $pildi_andmed[0];
        $korgus = $pildi_andmed[1];
        $formaat = $pildi_andmed[2];
        $max_laius = 200;
        $max_korgus = 90;

        //suhtearvu leidmine
        if($laius <= $max_laius && $korgus <= $max_korgus){
            $ratio = 1;
        } elseif($laius > $korgus){
            $ratio = $max_laius/$laius;
        } else {
            $ratio = $max_korgus/$korgus;
        }

        //uute mõõtmete leidmine
        $pisi_laius = round($laius*$ratio);
        $pisi_korgus = round($korgus*$ratio);

        echo '<h3>Originaal pildi andmed</h3>';
        echo "Laius: $laius<br>";
        echo "Kõrgus: $korgus<br>";
        echo "Formaat: $formaat<br>";

        echo '<h3>Uue pildi andmed</h3>';
        echo "Arvutamse suhe: $ratio <br>";
        echo "Laius: $pisi_laius<br>";
        echo "Kõrgus: $pisi_korgus<br>";
        echo "<div class='Gallery_Container'>";
        echo "<div>";
        echo "<img width='$pisi_laius' src='$pildi_aadress'><br>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<p style='color:red;'>Viga: Pilti ei leitud!</p>";
    }
}
?>
