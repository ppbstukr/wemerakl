function setCookie( name, value, expirehours ) {  
    var todayDate = new Date(); 
    todayDate.setHours( todayDate.getHours() + expirehours ); 
    document.cookie = name + "=" +escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";" 
}
function fnPopClose(popID){
    $("#" + popID).fadeOut(200);
}
function todaycloseWin(popID) {
    setCookie( popID,"1",24);
    document.getElementById(popID).style.visibility = "hidden";
}

cookiedata = document.cookie; 
if ( cookiedata.indexOf("ncookie=done") < 0 ){   
    document.getElementById('pop_03').style.visibility = "visible";
    document.getElementById('pop_02').style.visibility = "visible"; 
}else{ 
    document.getElementById('pop_03').style.visibility = "hidden";
    document.getElementById('pop_02').style.visibility = "hidden";
}
