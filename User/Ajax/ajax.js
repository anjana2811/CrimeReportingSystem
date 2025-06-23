
function display_district()
{
 
  var state=document.getElementById("state").value;
 

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('district').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_district.php?state="+state,true);
  xmlhttp.send();

}
function display_place()
{
 var district=document.getElementById("district").value;
 

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('city').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_place.php?district="+district,true);
  xmlhttp.send();
 
}
