function validate_feedback()
{
	var feedback=document.getElementById("feedback").value;
                          
       if(feedback=="" || !isNaN(feedback))
       {


                 alert("Please Enter Valid Feedback");
                  document.f1.feedback.focus();
                    return false;
            } 
}
function validate_change_password()
{
   var alpfnumeric = /^[A-Za-z0-9]+$/
  var username=document.getElementById("username").value;
               if(username==""){
                                alert("Please Enter Valid Username");
                                document.f1.username.focus();
                                return false;
                            }
                            
  var password=document.getElementById("password").value;
                            
if(password==""){
                                alert("Please Enter your Password");
                                document.f1.password.focus();
                                return false;
                            }
                             var npassword=document.getElementById("npassword").value;
                            
if(npassword=="" || (!npassword.match(alpfnumeric)) || (npassword.length < 5) || (npassword.length > 15) || !isNaN(npassword)){
                                alert("Please Enter your Password(5-15 digit alphanumeric New Password)");
                                document.f1.npassword.focus();
                                return false;
                            }
                            
                            var cpassword=document.getElementById("cpassword").value;
                            
                            if(cpassword==""){
                                alert("Please Enter your Confirm Password");
                                document.f1.cpassword.focus();
                                return false;
                            }
                           
                            
                             else{
                                if(npassword!=cpassword){
                                    alert("Password doesn't match")
                                    document.f1.cpassword.focus();
                                    return false;
                                }
                            } 
}
function validate_investigation()
{
   var investigation=document.getElementById("investigation").value;
                            
     if(investigation=="" || !isNaN(investigation)){
        alert("Please Fill Investigation Details");
                                document.f1.investigation.focus();
                                return false;
                            }  
                             return true;
}
function validate_culprit(){
  var culpritName = document.getElementsByName('culpritName[]');
        for (i=0; i<culpritName.length; i++)
            {
             if (culpritName[i].value == "")
                {
                 alert('Complete all the Name fields');     
                 return false;
                }
                        }
                        var culpritAge = document.getElementsByName('culpritAge[]');
        for (i=0; i<culpritAge.length; i++)
            {
             if (culpritAge[i].value == "")
                {
                 alert('Complete all the Age fields');      
                 return false;
                }
            }
                       
                       
        for (i=0; i<culpritAge.length*2; i=i+2)
            {
                           
             if ((document.f1.culpritGender[i].checked==false)&& (document.f1.culpritGender[i+1].checked==false))
                {
                                   
                 alert('Choose Gender');
                                
                 return false;
                }
            }
                        return true;
    }
    function validate_police()
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
       

      var phone_npt = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;

var phone_no=document.getElementById("phone_no").value;
  if(!phone_no.match(phone_npt))
        {
         
  alert("Please Enter Valid 10 digit Phone Number - Starting from 6 or 7 or 8 or 9");
       document.f1.phone_no.focus();
return false;
          }
       //  var alpfnumeric1 = /^[A-Za-z0-9 ]+$/;
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
var rank=document.getElementById("rank").value;
                          
        if(rank==0)
       {


               alert("Please Enter Valid Rank");
                 document.f1.rank.focus();
                                return false;
            } 
            var photo=document.getElementById("photo").value;
                          
        if(photo==0)
       {


               alert("Please choose photo ");
                 document.f1.photo.focus();
                                return false;
            } 

    }
    function validate_file()
    {
      var photo=document.getElementById("photo").value;
                          
        if(photo==0)
       {


               alert("Please choose photo ");
               
                                return false;
            } 
    }
    function validate_wanted()
    {
      var letters = /^[A-Za-z ]+$/;
    
        var name=document.getElementById("name").value;
                          
       if(name=="" || (!name.match(letters)))
       {


               alert("Please Enter Valid Name");
                 document.f1.name.focus();
                                return false;
            } 
      var dabs=document.getElementById("dabs").value;
                          
       if(dabs=="")
       {


               alert("Please Enter Valid abscounting Date");
                 document.f1.dabs.focus();
                                return false;
            } 
            var dreport=document.getElementById("dreport").value;
                          
       if(dreport=="")
       {


               alert("Please Enter Valid reporting Date");
                 document.f1.dreport.focus();
                                return false;
            }
      var age=document.getElementById("age").value;
                          
       if(age=="" || isNaN(age)  )
       {


      alert("Enter a valid age");
         document.f1.age.focus();
              return false;
            }
 if(document.f1.gender[0].checked==false && document.f1.gender[1].checked==false)
            {
             alert("Please choose gender");
                 
                    return false; 
            }
 if(document.f1.complexion[0].checked==false && document.f1.complexion[1].checked==false && document.f1.complexion[2].checked==false)
            {
             alert("Please choose complexion");
                 
                    return false; 
            }

             var height=document.getElementById("height").value;
                          
       if(height=="" || isNaN(height)  )
       {


      alert("Enter a valid height");
         document.f1.height.focus();
              return false;
            }
            var file=document.getElementById("photo").value;
  if(file==""){
         alert("Please Choose a file");
           
            return false;
                            }
                            else{
             var extension = file.substr(file.lastIndexOf('.') + 1).toLowerCase();
  var allowedExtensions = ['jpg', 'jpeg', 'png'];
  if (file.length > 0)
     {
          if (allowedExtensions.indexOf(extension) === -1) 
             {
               alert('Invalid file Format. Only ' + allowedExtensions.join(', ') + ' are allowed.');
               return false;
             }
    }                   
                            }

        if(document.f1.bstyle[0].checked==false && document.f1.bstyle[1].checked==false && document.f1.bstyle[2].checked==false)
            {
             alert("Please choose Body style");
                 
                    return false; 
            }
  var mark=document.getElementById("mark").value;
                          
        if(mark=="" || !isNaN(mark))
       {


               alert("Please Enter Identification Details");
                 document.f1.mark.focus();
                                return false;
            }
     var address=document.getElementById("address").value;
                          
        if(address=="" || !isNaN(address))
       {


               alert("Please Enter Address");
                 document.f1.address.focus();
                                return false;
            }
   var bcase=document.getElementById("bcase").value;
                          
        if(bcase=="" || !isNaN(bcase))
       {


               alert("Please Enter Brief of the case");
                 document.f1.bcase.focus();
                                return false;
            }
    }