<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>GoldTime</title>

    <style>
        body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            /* kuldne radiaalne gradient kogu taustal */
            background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
            radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
            background-repeat: no-repeat;
            background-size: cover;
        }

        header {
            background: rgba(51, 51, 51, 0.8);
            padding: 20px;
            text-align: center;
        }

        header h1 {
            color: #9f7928;
            margin: 0 0 10px 0;
        }

        nav a {
            margin: 0 15px;
            color: #C0C0C0;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 40px 20px;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin: 110px 0;
            font-size: 18px;
        }
    </style>

</head>
<body>

<header>
    <h1>GoldTime</h1>
    <nav>
        <a href="avaleht.php">Avaleht</a>
        <a href="hinnakiri.php">Hinnakiri</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<div class="container">
    <h2>Meist</h2>
    <p>
        GoldTime on kvaliteetsete ehete ja kellade müüja.
        Pakume elegantseid aksessuaare igaks sündmuseks – olgu selleks kingitus,
        tähtpäev või igapäevane kasutus.
    </p>

    <h2>Meie teenused</h2>
    <ul>
        <li>Kvaliteetsed kullast ja hõbedast ehted</li>
        <li>Käekellad</li>
        <li>Kohapealne graveerimine</li>
        <li>Ehete hooldus ja puhastus</li>
    </ul>
</div>

</body>
</html>
