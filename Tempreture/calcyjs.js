let cel=document.getElementById('cel');
let fer=document.getElementById('fer');

cel.addEventListener('focus',function()
{
    cel.style.background='Gainsboro';
    
});
cel.addEventListener('blur',function()
{
    cel.style.background='white';
});

fer.addEventListener('focus',function()
{
    fer.style.background='Gainsboro';
});
fer.addEventListener('blur',function()
{
    fer.style.background='white';

});

let re=0;

cel.addEventListener('input',function(){
    let c=this.value;
    let f=(c*9/5)+32;
    if(!Number.isInteger(f)) f=f.toFixed(4);
     fer.value=f;
    
});

fer.addEventListener('input',function(){
    let f=this.value;
    let c =(f-32)*(5/9);
    if(!Number.isInteger(c)) c=c.toFixed(4);
     cel.value=c;
});