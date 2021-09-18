let hr=0;
let min=0;
let sec=0;
let mili=0;
let count=false;

function start()
{
    count=true;
    stopwatch();
    document.getElementById('start').style.zIndex=-1;
    document.getElementById('stop').style.zIndex=1;
}
function stop()
{
    count=false;
    document.getElementById('start').style.zIndex=1;
    document.getElementById('stop').style.zIndex=-1;
}
function reset()
{
    count=false;
    hr=0;
 min=0;
 sec=0;
 mili=0;
    document.getElementById('hr').innerHTML='00';
    document.getElementById('min').innerHTML='00';
    document.getElementById('sec').innerHTML='00';
    document.getElementById('mili').innerHTML='00';
    document.getElementById('start').style.zIndex=1;
    document.getElementById('stop').style.zIndex=-1;
}

function stopwatch()
{
    if(count==true)
    {
        mili=mili+1;
        if(mili==100)
        {
            mili=-1;
            sec=sec+1;
        }
        if(sec==60)
        {
            
            sec=0;
            min=min+1;
        }
        if(min==60)
        {
            sec=0;
            min=0;
            hr=hr+1;
        }

        let Smili=mili;
        let Ssec=sec;
        let Smin=min;
        let Shr=hr;
        if(mili<10)
        {
            Smili="0"+mili;
        }
        if(sec<10)
        {
            Ssec="0"+sec;
        }
        if(min<10)
        {
            Smin="0"+min;
        }
        if(hr<10)
        {
            Shr="0"+hr;
        }
        

        
        
        
        document.getElementById('mili').innerHTML=Smili;
        document.getElementById('sec').innerHTML=Ssec;
        document.getElementById('min').innerHTML=Smin;
        document.getElementById('hr').innerHTML=Shr;
        setTimeout("stopwatch()",10);
        
    }
    
}