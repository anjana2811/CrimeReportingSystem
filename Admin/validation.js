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
function validate_category()
{
   var category=document.getElementById("category").value;
                            
                            if(category=="" || !isNaN(category)){
                                alert("Please Fill Category");
                                document.f1.category.focus();
                                return false;
                            }  
                             return true;
}

function validate_crime_upload()
{
    var file=document.getElementById("up").value;
                            
                            if(file==""){
                                alert("Choose a file");
                               
                                return false;
                            } 
                            return true;
}
function validate_culprit(){

    var culpritName = document.getElementsByName('culpritName');
    for (i=0; i<culpritName.length; i++)
      {
       if (culpritName[i].value == "")
        {
         alert('Complete all the Name fields');   
         return false;
        }
                        }
                        var culpritAge = document.getElementsByName('culpritAge');
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