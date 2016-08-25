Hcnav=new Object();
Hcnav.nav=document.getElementById('leftblog-menu');
Hcnav.height=Hcnav.nav.clientHeight;
if(Hcnav.height==0)
{
	Hcnav.nav.style.display="block";
	Hcnav.height=Hcnav.nav.clientHeight;
	Hcnav.nav.style.display="none";
}

function hidennav(){
	
	if(Hcnav.nav.style.display=="block")
	{
		Hcnav.i=Hcnav.height;
		Hcnav.nav.style.overflow='hidden';
		Hcnav.nav.style.height=Hcnav.height+"px";
		window.clearInterval(Hcnav.time2);
		Hcnav.time1=setInterval('navhiden()',1)
	}
	else{
		Hcnav.i=0;
		Hcnav.nav.style.height="1px";
		Hcnav.nav.style.overflow='hidden';
		Hcnav.nav.style.display="block";
		Hcnav.nav.style.height=0+"px";
		window.clearInterval(Hcnav.time1);
		Hcnav.time2=setInterval('navdis()',1);
		
	}
}
function navdis(){
 	Hcnav.nav.style.height=Hcnav.i+++"px";
 	if(Hcnav.i>Hcnav.height)
 	{window.clearInterval(Hcnav.time2);
 	//console.log("dis");
 	}
}
function navhiden(){
	Hcnav.i=Hcnav.i-2;
 	Hcnav.nav.style.height=Hcnav.i+"px";
 	if(Hcnav.i<2)
 	{window.clearInterval(Hcnav.time1);
 	Hcnav.nav.style.display="none";
 	//console.log("hiden");
 	}
 	
}