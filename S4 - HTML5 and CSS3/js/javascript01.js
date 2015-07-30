/* The Query Selector */

function bringit() {
    document.querySelector('#first').onclick=say;
}

function say() {
    alert('You clicked something!');   
}

window.onload=bringit;

