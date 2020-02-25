function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
function UpdateRoom(col1,col2,col3,col4,lbPrice,season_id) {
	//alert(col4);
    if (col1 == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById(room_day).innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","update_room.php?"+"rid="+col1+"&price="+col2+"&status="+col3+"&day="+col4+"&season_id="+season_id,true);
        xmlhttp.send();
		if(col3=='F'){
			document.getElementById(lbPrice).innerHTML = "<font color=red>FULL</font>";
		}else{
			document.getElementById(lbPrice).innerHTML =  numberWithCommas(col2) ;
		}
    }
}