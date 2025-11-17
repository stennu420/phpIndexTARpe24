<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Muusika küsitlus</title>
    <script src="muusika.js"></script>
    </script>
    <script
        src="https://code.jquery.com/ui/1.14.1/jquery-ui.min.js"
        integrity="sha256-AlTido85uXPlSyyaZNsjJXeCs07eSv3r43kyCVc8ChI="
        crossorigin="anonymous">

    </script>

    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function(){
            $('.viga').hide();

            $('.muusikavorm').submit(function(event){
                let valid = true;

                if ($('input[name="ansambel"]:checked').lenght === 0) {
                    valid = false;
                    $('.viga').show();
                } else {
                    $('.viga').hide();
                }

                if (!valid) {
                    event.preventDefault();
                }
            });
        });
    </script>
</head>
</head>
<body>
<h1>Muusika küsitlus</h1>
<form action="">

    <fieldset>
        <legend>Milliseid lauljaid või bände sa kõige rohkem kuulad?</legend>
        <br>
        <input type="checkbox" name="ansambel" id="travis_scott" value="travis scott" onchange="valiAnsambel()">
        <label for="travis_scott">Travis Scott</label>
        <br>
        <input type="checkbox" name="ansambel" id="lotey" value="lotey" onchange="valiAnsambel()">
        <label for="lotey">Lotey</label>
        <br>
        <input type="checkbox" name="ansambel" id="gunna" value="gunna" onchange="valiAnsambel()">
        <label for="gunna">Gunna</label>
        <br>
        <input type="checkbox" name="ansambel" id="nublu" value="Nublu" onchange="valiAnsambel()">
        <label for="nublu">Nublu</label>
        <br>
        <div id="vastus"></div>
        <br>

    </fieldset>

    <fieldset>
        <legend>Mida arvad muusika kuulamisest koolis?</legend>
        <textarea id="arvamus" name="arvamus" placeholder="Kirjuta oma arvamus siia..." oninput="kuvaArvamus()"></textarea>
        <div id="arvamusVastus"></div>
    </fieldset>
    <fieldset>
        <legend>Mitu tundi päevas sa kuulad muusikat?</legend>
        <input type="number" id="kuulamistunnid" name="kuulamistunnid" min="0" max="24" step="0.5" placeholder="Näiteks: 1,5" oninput="kuvaKuulamistunnid()">
        <div id="kuulamistunnidVastus"></div>
    </fieldset>
    <fieldset>
        <legend>Kas sa kuulad raadiot?</legend>
        <input type="radio" name="raadio" id="raadio-jah" value="Jah" onchange="kuvaRaadioValik()">
        <label for="raadio-jah">Jah</label>
        <input type="radio" name="raadio" id="raadio-ei" value="Ei" onchange="kuvaRaadioValik()">
        <label for="raadio-ei">Ei</label>
        <div id="raadioVastus"></div>
    </fieldset>
    <fieldset>
        <legend>Milliseid raadiojaamu oskad nimetada?</legend>
        <input list="jaamad" id="jaamadSisend" name="jaamad" placeholder="Kirjuta jaamade nimed, eralda komadega" oninput="kuvaJaamad()"/>
        <datalist id="jaamad">
            <option value="Kuku Raadio">
            <option value="RockFm">
            <option value="Sky Plus">
            <option value="Power Hit Radio">
            <option value="Retro FM">
        </datalist>
    </fieldset>
    <fieldset>
        <legend>Millist muusikat sa kõige rohkem kuulad?</legend>
        <select id="muusikaStiil" name="muusikaStiil">
            <option value="" disabled selected>Vali stiil</option>
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Hip-Hop">Hip-Hop</option>
            <option value="Jazz">Jazz</option>
            <option value="R&B">R&B</option>
            <option value="D&B">D&B</option>
        </select>
    </fieldset>

    <div class="buttons">
        <button id="saada">Saada</button>
        <button id="puhasta" type="reset">Puhasta</button>
    </div>

    <div id="tulemus"></div>


</form>
</body>
</html>
