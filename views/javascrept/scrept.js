// menu bar 

let menulist = document.getElementById('menulist');
let menubut = document.querySelector('.menu') ;

let closebut = document.querySelector('.close') ;


function openMenu(){
    menulist.style.display= 'flex';
    menubut.style.display= 'none';
    closebut.style.display = 'block';
    // document.querySelector('.menu').classList.toggle('animate');

}

function closeMenu(){
    menulist.style.display= 'none';
    menubut.style.display= 'block';
    closebut.style.display = 'none';

}