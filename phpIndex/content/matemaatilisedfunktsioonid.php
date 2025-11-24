<?php
echo "<h2>Matemaatilised tehted/funktsioonid</h2>";;
$arv1=10;
$arv2=15;
$liitmine=$arv1+$arv2;
$lahut=$arv1-$arv2;
$korrutis=$arv1*$arv2;
$jagamine=$arv1/$arv2;

echo "arv1 on ".$arv1." ja arv2 on  ".$arv2."<br>";
echo "<strong>Vastused: </strong> Liitmine: ".$liitmine."<br>";
echo "Lahutamine: ".$lahut."<br>";
echo "Korrutis: ".$korrutis."<br>";
echo "Jagamine: ".$jagamine."<br>";
echo "Omistamise operaatorid: ";
echo "<br>";
// $arv1++ - suurendamine ühe võrra $arv1=$arv1+1
$arv1++;
echo $arv1 ."- suurendamine ühe võrra";
echo "<br>";
// $arv1-- - vähendamine ühe võrra $arv1=$arv1-1
$arv1--;
echo $arv1 ."- suurendamine ühe võrra";
echo "<br>";
echo "<strong>Ruutjuur -sqrt()</strong>".sqrt($arv1);
echo "<br>";
echo "<br>";
echo "<h2>Kõige väiksem ja suurem</h2>";
echo min($arv1, $arv2); 	//10
echo "<br>";
echo max($arv1,$arv2); //15
echo "<br>";
echo "<h2>Juhuslik arv</h2>";
echo rand();	// annab juhusliku arvu
echo "<br>";
echo "<h2>Astendamine, ruutjuur ja pii</h2>";
echo pow($arv1, $arv2);	//25
echo "<br>";
echo pow($arv2, $arv1);	//125
echo "<br>";
echo sqrt(10);
echo "<br>";
echo pi();
echo "<br>";
echo "<h2>Arvmõistatus . Arva ära kaks arv vahemik 0...10";
$salaarv1=9;
$salaarv2=2;
//kirjuta matemaatilise tehtega või funktsioonide abil 5 vihjet;

//veel rohkem vihjeid
echo "<ol><li>Kui korruta X Y-ga siis tuleb 45 ";
echo "<li>See on ühe numbri korrutustabeli kõige viimane tulemus ";
echo "<li>See on suurim ühekohaline täisarv";
echo "<li>See arv on 3 korrutatud iseendaga";
echo "<br>";
echo ($salaarv1*5)." </li>";
?>
<form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'],"leht")?>" method="post">
    <label for="arv1">Arv1: </label>
    <input type="text" id="arv1" name="arv1" min="0" max="10" step="1">
    <br>
    <label for="arv2">Arv1: </label>
    <input type="text" id="arv2" name="arv2">
    <input type="submit" value="Kontrolli">
</form>

<?php
// ja kirjuta arvude kontroll saranaselt tekstifunktioonile
if(isset($_REQUEST["arv1"])&&($_REQUEST["arv1"]!="")){
    echo "X";
    if ($_REQUEST['ans1'] == $salaarv1) {
        echo "<div id='correct'>";
        echo $_REQUEST['ans1']. "on õige";
        echo "<div>";
    }else{
        echo "<div id='incorrect'>";
        echo $_REQUEST['ans1']. "on vale";
        echo "<div>";
    }
    echo "<div>";
    if(isset($_REQUEST["arv2"])&&($_REQUEST["arv2"]!="")) {
        echo "Y:";
        if ($_REQUEST['ans2'] == $salaarv2) {
            echo "<div id='correct'>";
            echo $_REQUEST['ans2'] . "on õige.";
            echo "</div>";
        } else {
            echo "<div id='incorrect'>";
            echo $_REQUEST['ans2'] . "on vale";
            echo "</div>";
        }

    }
}
