const url = 'mesas.html';
const erro = 'index.html';
const btn = document.getElementById('btnEntrar');
let precoTotal1 = 0
let precoTotal2 = 0
let precoTotal3 = 0
let precoTotal4 = 0
let precoTotal5 = 0
let precoTotal6 = 0
let totalzao = 0
document.getElementById('status1').innerText='Livre';
document.getElementById('status2').innerText='Livre';
document.getElementById('status3').innerText='Livre';
document.getElementById('status4').innerText='Livre';
document.getElementById('status5').innerText='Livre';
document.getElementById('status6').innerText='Livre';

// ==========================ocupar mesa================================ //

function ocupar1(){
    document.getElementById('status1').innerText='Ocupado'
    document.getElementById()
}
function ocupar2(){
    document.getElementById('status2').innerText='Ocupado'
}
function ocupar3(){
    document.getElementById('status3').innerText='Ocupado'
}
function ocupar4(){
    document.getElementById('status4').innerText='Ocupado'
}
function ocupar5(){
    document.getElementById('status5').innerText='Ocupado'
}
function ocupar6(){
    document.getElementById('status6').innerText='Ocupado'
}

// ==========================fechar mesa================================ //

let finalMesa1 = 0,
    finalMesa2 = 0,
    finalMesa3 = 0,
    finalMesa4 = 0,
    finalMesa5 = 0,
    finalMesa6 = 0;

function liberar1(){
    document.getElementById('status1').innerText='Livre';
    finalMesa1 += precoTotal1
    precoTotal1=0
    document.getElementById("total1").innerHTML='0'
}
function liberar2(){
    document.getElementById('status2').innerText='Livre';
    finalMesa2 += precoTotal2
    precoTotal2=0
    document.getElementById("total2").innerHTML='0'
}
function liberar3(){
    document.getElementById('status3').innerText='Livre';
    finalMesa3 += precoTotal3
    precoTotal3=0
    document.getElementById("total3").innerHTML='0'
}
function liberar4(){
    document.getElementById('status4').innerText='Livre';
    finalMesa4 += precoTotal4
    precoTotal4=0
    document.getElementById("total4").innerHTML='0'
}
function liberar5(){
    document.getElementById('status5').innerText='Livre';
    finalMesa5 += precoTotal5
    precoTotal5=0
    document.getElementById("total5").innerHTML='0'
}
function liberar6(){
    document.getElementById('status6').innerText='Livre';
    finalMesa6 += precoTotal6
    precoTotal6=0
    document.getElementById("total6").innerHTML='0'
}

// ==========================login====================================== //

function validar(){
    var username = document.getElementById("user").value;
    var senha = document.getElementById("password").value;
    if ( username == "admin" && senha == "123"){
        window.open(url, '_blank');
        win.focus()
    }
    else{
        alert("Dados Incorretos")
        window.open(erro, '_blank');
        win.focus()
    }
}

btn.addEventListener('click', () => {
    entrar(url);
})

const coman = 'comanda/index.html';

function comanda(){
    window.open(coman, '_blank');
    win.focus()
}

// ============================compras e somas======================================== //

function apertar1(preco){
    precoTotal1+=preco
    console.log(precoTotal1)
    Cookies.set('pTotal1', precoTotal1)
    document.getElementById("total1").innerHTML = Cookies.get('pTotal1')
    document.getElementById("stotal1").innerHTML = Cookies.get('pTotal1')
}

function apertar2(preco){
    precoTotal2+=preco
    console.log(precoTotal2)
    Cookies.set('pTotal2', precoTotal2)
    document.getElementById("total2").innerHTML= Cookies.get('pTotal2')
    document.getElementById("stotal2").innerHTML= Cookies.get('pTotal2')
}

function apertar3(preco){
    precoTotal3+=preco
    console.log(precoTotal3)
    Cookies.set('pTotal3', precoTotal3)
    document.getElementById("total3").innerHTML= Cookies.get('pTotal3')
    document.getElementById("stotal3").innerHTML= Cookies.get('pTotal3')
}

function apertar4(preco){
    precoTotal4+=preco
    console.log(precoTotal4)
    Cookies.set('pTotal4', precoTotal4)
    document.getElementById("total4").innerHTML= Cookies.get('pTotal4')
    document.getElementById("stotal4").innerHTML= Cookies.get('pTotal4')
}

function apertar5(preco){
    precoTotal5+=preco
    console.log(precoTotal5)
    Cookies.set('pTotal5', precoTotal5)
    document.getElementById("total5").innerHTML= Cookies.get('pTotal5')
    document.getElementById("stotal5").innerHTML= Cookies.get('pTotal5')
}

function apertar6(preco){
    precoTotal6+=preco
    console.log(precoTotal6)
    Cookies.set('pTotal6', precoTotal6)
    document.getElementById("total6").innerHTML= Cookies.get('pTotal6')
    document.getElementById("stotal6").innerHTML= Cookies.get('pTotal6')
}


function tExpediente(){
    var totalzao = finalMesa1 + finalMesa2 + finalMesa3 + finalMesa4 + finalMesa5 + finalMesa6
    document.getElementById("totalExpe").innerHTML=totalzao
    Cookies.set('totalExpediente', totalzao)
}