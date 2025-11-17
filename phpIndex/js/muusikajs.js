//chekcbox valikud
function valiAnsambel(){
    let abba=document.getElementById('travis_scott');
    let the=document.getElementById('lotey');
    let system=document.getElementById('gunna');
    let nancy=document.getElementById('nublu');
    let vastus=document.getElementById('vastus');

    let valik="";

    if(abba.checked){
        valik+=abba.value+", ";
    }
    if(the.checked){
        valik+=the.value+", ";
    }
    if(system.checked){
        valik+=system.value+", ";
    }
    if(nancy.checked){
        valik+=nancy.value+", ";
    }

    vastus.innerHTML="Sinu valitud muusikud:"+valik;
    vastus.style.color= "#FF0000";


}
function kuvaArvamus() {
    let tekst = document.getElementById('arvamus').value;
    let vastus = document.getElementById('arvamusVastus');
    vastus.innerText = tekst ? "Sinu arvamus: " + tekst : "";
    vastus.style.color = 'red';
}
function kuvaKuulamistunnid() {
    let tunnid = document.getElementById('kuulamistunnid').value;
    let vastus = document.getElementById('kuulamistunnidVastus');
    if (tunnid) {
        vastus.innerText = "Sa kuulad muusikat " + tunnid + " tundi pأ¤evas.";
    } else {
        vastus.innerText = "";
    }
    vastus.style.color = 'red';
    vastus.style.marginTop = '5px';
}
function kuvaRaadioValik() {
    let raadioVastus = document.getElementById('raadioVastus');
    let jah = document.getElementById('raadio-jah');
    let ei = document.getElementById('raadio-ei');
    let vastusTekst = "";

    if (jah.checked) {
        vastusTekst = "Sa kuulad raadiot.";
    } else if (ei.checked) {
        vastusTekst = "Sa ei kuula raadiot.";
    } else {
        vastusTekst = "";
    }

    raadioVastus.innerText = vastusTekst;
    raadioVastus.style.color = 'red';
}