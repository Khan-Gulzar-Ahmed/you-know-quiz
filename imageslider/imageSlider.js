let flag=0;
slidshow(flag);
function counter(x)
{
    flag=flag+x;
    if(flag>4) 
    {
        flag=-1;
        flag=flag+1;   
    }
    if(flag<0) 
    
    {
        flag=5;
        flag=flag-1;
    }
    
        slidshow(flag);  
}
function slidshow(num)
{
    let slides=document.getElementsByClassName('imageslide');
    for(let y of slides)
    {
        y.style.display="none";
    }
    
    slides[num].style.display='block';
    
}