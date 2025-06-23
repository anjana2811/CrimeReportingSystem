
function display_district()
{
  alert("jj");
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
function display_crime()
{
 var date=document.getElementById("date").value;
 

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
   
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_crime.php?date="+date,true);
  xmlhttp.send();  
}
function display_crime_category()
{
    var category=document.getElementById("category").value;
 
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_category_crime.php?category="+category,true);
  xmlhttp.send();
}
function display_crime_by_crime_id()
{
  var crime_id=document.getElementById("crime_id").value;
 
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  if(crime_id=="")
  {
  xmlhttp.open("GET","display_crime1.php",true);
  }
  else
  {
   xmlhttp.open("GET","display_crime_by_id.php?crime_id="+crime_id,true); 
  }
  xmlhttp.send();
}
function display_crime_category2()
{
    var category=document.getElementById("category").value;
 
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_category_crime2.php?category="+category,true);
  xmlhttp.send();
}
function display_crime_by_crime_id2()
{
  var crime_id=document.getElementById("crime_id").value;
 
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  if(crime_id=="")
  {
  xmlhttp.open("GET","display_crime2.php",true);
  }
  else
  {
   xmlhttp.open("GET","display_crime_by_id2.php?crime_id="+crime_id,true); 
  }
  xmlhttp.send();
}
