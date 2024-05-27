$(document).ready(function(){
    // 콘솔로그 에러로 인해서 주석
    // if(!fnGetCookie(popID)){
    //     $("#" + popID).fadeIn(200);
    // }
    
    // 팝업 쿠키 체크
    cookieCheck();
});

function fnPopClose(popID){
    $("#" + popID).fadeOut(200);
}

function fnPopCloseDay(popID){
    fnPopClose(popID);
    fnSetCookie(popID,"done",24);
}

function fnSetCookie( name, value, expirehours ) {  
    var todayDate = new Date(); 
    todayDate.setHours( todayDate.getHours() + expirehours ); 
    document.cookie = name + "=" +escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";" 
}

// 기존에 사용하던 쿠키 체크 후 처리 주석
 var cookiedata = document.cookie; 
// if ( cookiedata.indexOf("pop_02") < 0 ){   
//     document.getElementById('pop_02').style.visibility = "visible";
// }else{
//     document.getElementById('pop_02').style.visibility = "hidden";
// }

// if ( cookiedata.indexOf("pop20180716") < 0 ){   
//     document.getElementById('pop20180716').style.visibility = "visible";
// }else{
//     document.getElementById('pop20180716').style.visibility = "hidden";
// }

// function setVisible(id){
//     if ( cookiedata.indexOf(id+"=done") < 0 ){   
//         document.getElementById(id).style.visibility = "visible";
//     }else{
//         document.getElementById(id).style.visibility = "hidden";
//     }
// }

function setVisible(id){
    document.getElementById(id).style.visibility = cookiedata.indexOf(id+"=done") ==-1 ? "Visible" : "hidden"
}




/**
 * set getCookie
 * 
 * @param {*} name 
 * @returns 
 */
 function getCookie(name){
	var nameOfCookie = name + "=";
	var x = 0;
	while (x <= document.cookie.length){
		var y = (x + nameOfCookie.length);

		if (document.cookie.substring(x, y) == nameOfCookie){
		if ((endOfCookie = document.cookie.indexOf(";", y)) == -1){
			endOfCookie = document.cookie.length;
		}
		return unescape (document.cookie.substring(y, endOfCookie));
	}
	x = document.cookie.indexOf (" ", x) + 1;
	if (x == 0) break;
	}
	return "";
}


/**
 * 팝업 쿠키 체크
 */
function cookieCheck() {
    if(getCookie("pop_02") != "done") {
        document.getElementById('pop_02').style.display = "block";
    } else {
        document.getElementById('pop_02').style.display = "none";
    }
    if(getCookie("pop_03") != "done") {
        document.getElementById('pop_03').style.display = "block";
    } else {
        document.getElementById('pop_03').style.display = "none";
    }
    if(getCookie("pop_04") != "done") {
        document.getElementById('pop_04').style.display = "block";
    } else {
        document.getElementById('pop_04').style.display = "none";
    }

   /* if(getCookie("pop20180716") != "done") {
        document.getElementById('pop20180716').style.display = "block";
    } else {
        document.getElementById('pop20180716').style.display = "none";
    }*/
}