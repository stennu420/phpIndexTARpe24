<?php
echo "
<style>
    .flex-wrapper {
        display: flex;
        flex-direction: column; 
        gap: 20px;
        margin-top: 20px;
        max-width: 800px;
    }
    .flex-box {
        padding: 15px;
        border: 2px solid #888;
        border-radius: 10px;
        background: #f7f7f7;
    }
</style>
";

echo "<h1>Ajafunktsioonid</h1>";

echo "<div class='flex-wrapper'>";

/* ===========================================
   KONTEINER 1
=========================================== */
echo "<div class='flex-box'>";
echo "<h2>Tänane info</h2>";

echo "Tänane kuupäev: ".date("d.m.Y")."<br>";

date_default_timezone_set("Europe/Tallinn");

echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>timezones.europe.php</a><br><br>";
echo "time() — ".time()."<br>";
echo "date() — ".date("d.m.Y G:i:s", time());

echo "<pre>
date('d.m.Y G:i:s', time())
d - päev 01...31
m - kuu 1...12
Y - neljakohaline aasta
G - 24h formaat
i - minutid
s - sekundid
</pre>";

echo "</div>";

/* ===========================================
   KONTEINER 2
=========================================== */
echo "<div class='flex-box'>";
echo "<h2>Tehtud kuupäevaga</h2>";

echo "+1 min: ".date('d.m.Y G:i:s', time()+60)."<br>";
echo "+1 tund: ".date('d.m.Y G:i:s', time()+3600)."<br>";
echo "+1 päev: ".date('d.m.Y G:i:s', time()+86400)."<br>";

echo "</div>";

/* ===========================================
   KONTEINER 3
=========================================== */
echo "<div class='flex-box'>";
echo "<h2>Kuupäeva genereerimine</h2>";

$synnipaev = mktime(13,20,2,1,24,2008);
echo "Minu sünnipäev: ".date("d.m.Y G:i:s", $synnipaev)."<br><br>";

echo "Tänane kuu nimega:<br>";
$kuud = array(10=>'jaanuar','veebruar','märts','april','mai','juuni','juuli','august','september','oktoober','november','detsember');
$paev = date('d');
$aasta = date('Y');
$kuu = $kuud[(int)date('m')];

echo "$paev. $kuu $aasta a<br><br>";

echo "Minu sünnipäev kuu nimega:<br>";
$paev = 24;
$aasta = 2008;
$kuu = $kuud[1];

echo "$paev. $kuu $aasta a";

echo "</div>";

echo "</div>";
?>

