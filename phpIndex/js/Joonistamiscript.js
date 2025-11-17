//sirge joon
function sirgeJoon(){
    //mأ¤أ¤rame tahvli
    const tahvel=document.getElementById("tahvel");
    if(tahvel.getContext){
        let t=tahvel.getContext('2d'); //anname tahvli nimi on t
        //joon
        t.beginPath();
        t.strokeStyle="red";
        t.lineWidth=1;
        t.moveTo(20,80); //alguspunkt
        t.lineTo(150,30); //lأµpppunkt
        t.stroke();
    }
}
//kolmnurk
function kolmnurk(){
    //mأ¤أ¤rame tahvli
    const tahvel=document.getElementById("tahvel");
    if(tahvel.getContext){
        let t=tahvel.getContext('2d'); //anname tahvli nimi on t
        //joon
        t.beginPath();
        t.strokeStyle="red";
        t.fillStyle="red"; //taust
        t.lineWidth=1;
        t.moveTo(50,100); //alguspunkt
        t.lineTo(150,100);
        t.lineTo(150,200);
        t.lineTo(50,100); //lأµpppunkt
        t.stroke();
        t.fill();
    }
}
function puhasta(){
    const tahvel=document.getElementById("tahvel");
    if(tahvel.getContext) {
        let t = tahvel.getContext('2d');
        t.clearRect(0,0,300,250); // 0,0 -vaska أ¼leval tahvli nurk, 300-ahvli laius, 250- tahvli kأµrgus
    }
}
//ring
function ring(){
    //mأ¤أ¤rame tahvli
    const tahvel=document.getElementById("tahvel");
    let r=document.getElementById("raadius");
    if(tahvel.getContext){
        let t=tahvel.getContext('2d'); //anname tahvli nimi on t
        //أ¼mberjoon
        t.beginPath();
        t.strokeStyle="green";
        t.lineWidth=1;
        t.arc(50,50, r.value, 0, 2*Math.PI, true); //x, y- keskpuntk, R
        t.stroke();
        //rong
        t.beginPath();
        t.fillStyle="green";
        t.lineWidth=1;
        t.arc(50,120, r.value, 0, 2*Math.PI, true); //x, y- keskpuntk, R
        t.fill();


    }
}
function ristkylik(){
    const tahvel=document.getElementById("tahvel");
    let laius=document.getElementById("laius");
    let korgus=document.getElementById("korgus");
    if(tahvel.getContext) {
        let t = tahvel.getContext('2d');
        t.fillStyle="yellow";
        t.fillRect(50,30,laius.value,korgus.value); // 0,0 -vaska أ¼leval tahvli nurk, 300-ahvli laius, 250- tahvli kأµrgus
    }
}
function pilt(){
    const tahvel=document.getElementById("tahvel");
    if(tahvel.getContext) {
        let t = tahvel.getContext('2d');

        const fail=new Image()
        fail.src="https://picsum.photos/100/200?random=1";
        t.drawImage(fail, 50,50,100,200);
    }
}