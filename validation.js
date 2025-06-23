
/*$(document).ready(function(){
  

 $('#username').on('blur', function() {
alert("Mouse up over p1!");
 });
});
*/
function validate_login()
{
	var username=document.getElementById("username").value;
                          
       if(username=="" || !isNaN(username))
       {


                 alert("Please Enter Valid Username");
                  document.f1.username.focus();
                    return false;
            } 
            var password=document.getElementById("password").value;
                          
       if(password=="" || !isNaN(password))
       {


                 alert("Please Enter Valid password");
                  document.f1.password.focus();
                    return false;
            }
           }
           function validate_user()
           {
var letters = /^[A-Za-z]+$/;
	var fname=document.getElementById("fname").value;
                          
       if(fname==""  ||   (!fname.match(letters)) )
       {


               alert("Please Enter Valid First Name");
                 document.f1.fname.focus();
                                return false;
            } 
     var lname=document.getElementById("lname").value;
                            
          if(lname=="" ||  (!lname.match(letters)) ){
             alert("Please Enter Valid Last Name");
               document.f1.lname.focus();
                                return false;
                            } 

var state=document.getElementById("state").value;
                          
       if(state==0)
       {


                 alert("Please choose state");
                 
                    return false;
            }
            var district=document.getElementById("district").value;
                          
       if(district==0)
       {


                 alert("Please choose district");
                 
                    return false;
            } 
        var city=document.getElementById("city").value;
                          
       if(city==0)
       {


                 alert("Please choose city");
                 
                    return false;
            }  
            if(document.f1.gender[0].checked==false && document.f1.gender[1].checked==false)
            {
             alert("Please choose gender");
                 
                    return false;	
            }
             var dob=document.getElementById("dob").value;
                          
        if(dob=="" )
       {


               alert("Please Enter Valid date of birth");
                 document.f1.dob.focus();
                                return false;
            } 
      var pincode=document.getElementById("pincode").value;           
        if(pincode=="" || isNaN(pincode))
       {


               alert("Please Enter Valid  pincode");
                 document.f1.pincode.focus();
                                return false;
            } 

      var phone_npt = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;

var phone_no=document.getElementById("phone_no").value;
  if(!phone_no.match(phone_npt))
        {
         
  alert("Please Enter Valid 10 digit Phone Number - Starting from 7 or 8 or 9");
       document.f1.phone_no.focus();
return false;
          }
         var alpfnumeric1 = /^[A-Za-z0-9 ]+$/;
  var address=document.getElementById("address").value;
    if(address=="" || !isNaN(address)){
           alert("Please Enter Valid Address");
                document.f1.address.focus();
                                return false;
                            } 


   var emailid=document.getElementById("emailid").value;
     var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!emailid.match(mailformat))
{
  alert("Please Enter Valid Email Id");
       document.f1.emailid.focus();
return false;
} 
 var alpfnumeric = /^[A-Za-z0-9]+$/;   
var username=document.getElementById("username").value;
  if(username=="" || (!username.match(alpfnumeric)) || (username.length < 5) || (username.length > 15) || !isNaN(username)){
                                alert("Please Enter Valid User Name(5-15 digit alphanumeric username)");
                     document.f1.username.focus();
                                return false;
                            }
                            
                              var password=document.getElementById("password").value;
                            
if(password=="" || (!password.match(alpfnumeric)) || (password.length < 5) || (password.length > 15) || !isNaN(password)){
                                alert("Please Enter your Password(5-15 digit alphanumeric Password)");
                                document.f1.password.focus();
                                return false;
                            }
                           
                            
                            var cpassword=document.getElementById("cpassword").value;
                            
                            if(cpassword==""){
                                alert("Please Enter your Confirm Password");
                                document.f1.cpassword.focus();
                                return false;
                            }
                           
                            
                             else{
                                if(password!=cpassword){
                                    alert("Password doesn't match")
                                    document.f1.cpassword.focus();
                                    return false;
                                }
                            }
           }
           function validate_police_officer()
{
    
                            
      var state=document.getElementById("state").value;
                            
                         if(state==0){
                                alert("Please Choose Your State");
                                return false;
                            }
         var district=document.getElementById("district").value;
                            
                            if(district==0){
                           alert("Please Choose Your District");
                                return false;
                            }
         var city=document.getElementById("city").value;
                            
            if(city==0){
                                alert("Please Choose Your City");
                                return false;
                            }
                             var addr=document.getElementById("addr").value;
                            
                            if(addr=="" || !isNaN(addr)){
                                alert("Please Fill Valid Address");
                                document.f1.address.focus();
                                return false;
                            }
        var zipcode=document.getElementById("zipcode").value;
               if(zipcode=="" || isNaN(zipcode) || zipcode.length!=6)
        {
            alert("Please Provide valid  Zipcode");
            document.f1.zipcode.focus();
            return false;
        }
         var phno=document.getElementById("phno").value;
                               if(phno=="" || isNaN(phno) || phno.length!=10)
        {
            alert("Please Provide valid  Phone Number");
            document.f1.phno.focus();
            return false;
        }
          var mail=document.getElementById("email").value;
                     
                            atpos=mail.indexOf("@");
                            dotpos=mail.indexOf(".");
                            
                            if((atpos<1)||(dotpos-atpos<2)){
                                
                                 alert("Please Provide your Valid Email");
                                 document.f1.email.focus();
                                 return false;
                            }
                             var uname=document.getElementById("uname").value;
                            
                            if(uname==""){
                                alert("Please Enter your Password");
                                document.f1.username.focus();
                                return false;
                            }
                             var password=document.getElementById("password").value;
                            
                            if(password==""){
                                alert("Please Enter your Password");
                                document.f1.password.focus();
                                return false;
                            }
                             var cpassword=document.getElementById("cpassword").value;
                            
                            if(cpassword==""){
                                alert("Please Enter confirm Password");
                                document.f1.cpassword.focus();
                                return false;
                            }
                           
                         
                                if(password!=cpassword){
                                    alert("Password doesn't match")
                                    document.f1.cpassword.focus();
                                    return false;
                                }
                            
                            return true;
}
