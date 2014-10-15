function showswfab(offest){
	if(document.getElementById('QvodPlayer').PlayState==3){//≤•∑≈÷–
		document.getElementById('ad').style.display='none';
		document.getElementById('adb').style.display='none';
                document.getElementById('QvodPlayer').style.height = '506';
	}
	if(document.getElementById('QvodPlayer').PlayState==2){//‘›Õ£
		document.getElementById('ad').style.display='none';
		document.getElementById('adb').style.display='';
	}
	if(document.getElementById('QvodPlayer').PlayState==10){//ª∫≥Â
		document.getElementById('ad').style.display='';
		document.getElementById('adb').style.display='none';
                document.getElementById('QvodPlayer').style.height = '63';
	}
}
function changeErr()
{
document.getElementById('wdnoqvod').innerHTML='<div id="ad"><iframe marginWidth="0" marginHeight="0" src="/qvod.html" frameBorder="0" width="644" scrolling="no" height="506" ></iframe></div>';
}

function killErrors() {
return true;
}
window.onerror = killErrors;

function addFlash(url,w,h){
if(left(url,7)=='qvod://'){
qvodurl=url.split("|");
url=qvodurl[0]+'|'+qvodurl[1]+'|'+qvodurl[2]+'|'
}
adh=h-63;
document.write('<div id="wdnoqvod">');
document.write('<div id="ad"><iframe marginWidth="0" marginHeight="0" src="/loading.html" frameBorder="0" width="'+w+'" scrolling="no" height="'+adh+'" id="wdqad" name="wdqad"></iframe></div>');
document.write('<div id="adb" style="position:absolute;MARGIN-TOP: 46px;MARGIN-left: 73px;display:none;"><iframe marginWidth="0" marginHeight="0" src="/zt.html" frameBorder="0" width="500" scrolling="no" height="350" id="wdztad" name="wdztad"></iframe></div>');
document.write("<object classid='clsid:F3D0D36F-23F8-4682-A195-74C92B03D4AF' width='"+w+"' height='63' id='QvodPlayer' name='QvodPlayer' onerror=\"changeErr();\"><PARAM NAME='URL' VALUE='"+url+"'><param name='Autoplay' value='1'><PARAM NAME='QvodAdUrl' VALUE='/zt.html'>");
document.write("</object>");
document.write('</div>');
setInterval('showswfab()','1000');
document.getElementById('wdqad').src='/loading.html'; //hh
document.getElementById('wdztad').src='/zt.html'; //zz

}


function left(mainStr,lngLen) { 
if (lngLen>0) {return mainStr.substring(0,lngLen)} 
else{return null} 
} 