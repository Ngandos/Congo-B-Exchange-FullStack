function  themeCrea(color){/*declarer une fonction qui fait changer la couleur de background pas des boutons onclick html*/
    document.body.style.background = color;
        }

function refresh(){
    let t = 1000;//Rafraichissement en milisecondes
    setTimeout('showDate()',t)
        }

function showDate(){
    let date = new Date()//Valeur primitive permettant de recuperer la date du jour
    let h = date.getHours();
    let m = date.getMinutes();
    let s = date.getSeconds();
    if( h < 10 ){ h = '0' + h;}
    if( m < 10 ){ m = '0' + m;}
    if( s < 10 ){ s = '0' + s;}
    let time = h + ':' + m + ':' + s//Variable incluant les troisx variables H, M, S afin de ne pas avoir a les recopier chaque fois
    document.getElementById('horloge').innerHTML = time; 
    refresh();
        }

function nouvColor(){
    let x = document.getElementsByClassName('navlist');

    for(valeur of x){
        valeur.style.boxShadow = 'inset white 5px 5px 25px 15px'
        valeur.style.color = 'black'
        valeur.style.border = 'rgb(135, 82, 179) solid 2px'
    }
}
