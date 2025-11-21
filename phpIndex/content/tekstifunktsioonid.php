<?php
echo "<h2>Tekstifunktsioonid</h2>";
$tekst='Veebirakendused on arvutitarkvara programm';
echo $tekst; //näitab muutaja sisu
echo "<br>";
echo "Mitu sõna on lauses -str_word_count()= " .str_word_count($tekst). "tk";
//metshein.com -->PHP alused
echo "<br>";
echo "Kõik tähed muudab väiksemaks -strolower ".strtolower($tekst);
echo '<br>';
echo "Kõik tähed muudab väiksemaks -strtoupper ".strtoupper($tekst);
echo '<br>';
$tekst = 'Life Is About Ignoring The Drama.';

echo ucfirst(strtolower($tekst));
echo '<br>';
//Tekstipikkus
$tekst = 'Experience is the teacher of fools';
echo strlen($tekst);			//34
echo '<br>';
//Tekst kaks
$tekst2 = ' 	A woman should soften but not weaken a man   ';
echo "<pre>$tekst2 </pre>";
echo "Eemaldab ühikud tekstist -trim()<pre>".trim($tekst2)."</pre>";
echo "Eemaldab ühikud teksti eest -ltrim()<pre>".ltrim($tekst2)."</pre>";
echo "Eeemaldab teksti pärast -rtrim()<pre>".rtrim($tekst2)."</pre>";
echo "<h3>Tekst kui massiv</h3>";
echo "võtab tekstist esimese tähe -tekst[0]= ".$tekst[0]; 				//A
echo '<br>';
echo "võtab tekstist viienda tähe -tekst[4]= ".$tekst[4]; 				//t
echo '<br>';
echo "Võtab alates neljast sümbolist 5 tähte -substr(tekst, 3, 5)=".substr($tekst, 3, 5);		//thin
echo '<br>';
echo " Võtab alates viiendast tähest kuni 13 täheni -substr(tekst, 4, -13)".substr($tekst, 4, -13);	//thinking men
echo '<br>';
echo "Võtab paremalt poolt alates 8,7 tk -substr(tekst, -8, 7); ".substr($tekst, -8, 7);		//atheist
echo '<br>';
print_r(str_word_count($tekst, 1));
echo '<br>';
$sona = str_word_count($tekst, 1);
echo $sona[2];
echo"Võtab kolmanda sõna tekstimassiivist -sona[2]=";
echo '<br>';
echo "<h3>Teksti asendamine</h3>";
$asendus = 'Tarkvara asendamine';
$otsitav_algus = 4;
$otsitav_pikkus = 4;
echo substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
echo '<br>';
$otsi = array('on', 'programm');
$asenda = array('---', 'software', 'ees');
echo "otsib sõnu= on ja asendab sõna= programm - str_replace(otsi, asendab, tekst)=".str_replace($otsi, $asenda, $tekst);
//Mõistatus - arva ära EESTI LINNANIMI
// eesmärk on ära arvata, millist Eesti linna on kirjeldatud.
// Kirjuta abiks 5-6 tekstipõhist "funktsiooni" ehk vihjet,
// mis aitaavad samm-sammult lähemale jõuda õigele linnaimele.
// funktsioonid on näitkes selliseid - esimene täht on ..jne*/
echo '<br>';
$linn="Põlva";
echo "<ol><li>Linn algab ".substr($linn, 0,1)." tähega</li>";
echo "<li>Linna nimes on ".strlen($linn)." tähte</li>";
echo "<li>Viimane täht on: ".substr($linn, -1)."</li>";
echo "<li>Keskmine osa nimest on: ".substr($linn, 1, 2)."</li>";
echo "</ol>";
?>
<form action="tekstifunktsioonid.php" method="post">
    <label for="linn">Sisesta linnanimi</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
<?php
if(issent($_REQUEST["linn"])){
    if($_REQUEST["linn"]=="ppp"){
        echo  $_REQUEST["linn"]. "on õige";
    } else {
        echo $_REQUEST["linn"]."on vale";
    }
}

