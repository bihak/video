
let myDIV = document.getElementById('myDIV');
let hide = document.getElementById('hide');
let retour = document.getElementById('retour');


myDIV.addEventListener('click',function(){
    if(getComputedStyle(hide).display != "none"){
        hide.style.display = "none";
    } else {
        hide.style.display = "block";
    }
})


retour.addEventListener('click',function(){
    hide.style.display = "none";
})