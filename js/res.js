
var burger=document.querySelector('.burger');
var rightnav=document.querySelector('.rightnav');
var navlist=document.querySelector('.nav-list');
var navbar=document.querySelector('.navbar');


burger.addEventListener('click',()=>{
    rightnav.classList.toggle('v-class');
    navlist.classList.toggle('v-class');
    navbar.classList.toggle('h-nav');
});

