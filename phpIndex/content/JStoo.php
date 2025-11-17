<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Joonistaminecanvas elemendiga</title>
    <link rel="stylesheet" href="joonistamineStyle.css">
    <script src="joonistamineScript.js"></script>
    <script src="lipp.js"></script>
</head>
<body>
<h1>Joonistamine JS-ga</h1>
<canvas id="tahvel" width="300" height="250"></canvas>
<br>
<input type="button" value="Puhasta"  onclick="puhasta()">
<br>
<input type="button" value="Sirge joon"  onclick="sirgeJoon()">
<input type="button" value="Kolmnurk"  onclick="kolmnurk()">
<br>
<label for="raadius">R:</label>
<input type="number" id="raadius" min="0" max="100" value="5" onchange="ring()">
<input type="button" value="Ring"  onclick="ring()">
<br>
<label for="raadius">Laius</label>
<input type="number" id="laius" min="0" max="100" value="5" onchange="ristkylik()">
<label for="raadius">Kõrgus</label>
<input type="number" id="korgus" min="0" max="100" value="5" onchange="ristkylik()">
<input type="button" value="Ristkülik" onclick="ristkylik()">
<br>
<input type="button" value="picsum pilt" onclick="pilt()">
<!--Valgusfoor-->
<const valgusfoorCanvas = document.getElementById('valgusfoor');
<const vfCtx=" valgusfoorCanvas.getContext('2d'" ;

<div class="valgusfoor-container">
    <h2>Valgusfoor</h2>
    <canvas id="valgusfoor" width="100" height="260" style="background:#222; border-radius:15px; display:block; margin: 0 auto;"></canvas>
    <div class="valgusfoor-nupud" style="margin-top:10px;">
        <input type="button" value="Mine" onclick="valgusfoor('go')">
        <input type="button" value="Oota" onclick="valgusfoor('wait')">
        <input type="button" value="Seisa" onclick="valgusfoor('stop')">
    </div>
</div>





<br>
<!--Lipud joonistamine-->
<h1>Lipud</h1>
<canvas id="lipp" width="330" height="210"></canvas>
<input type="button" value="Eesti lipp" onclick="eestiLipp()">
<input type="button" value="Prantsusmaa lipp" onclick="prantsusmaa()">
<input type="button" value="Hispaania lipp" onclick="hispaania()">





</body>
</html>
