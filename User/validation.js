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
 function validate_complaint()
        {
            var complaint_sub=document.getElementById("complaint_sub").value;
                            
                            if(complaint_sub==""){
                                alert("Please fill complaint Subject");
                                document.f1.complaint_subject.focus();
                                return false;
                            }
                              var complaint_desc=document.getElementById("complaint_desc").value;
                            
                            if(complaint_desc==""){
                                alert("Please fill complaint Description");
                                document.f1.complaint_desc.focus();
                                return false;
                            }
                            var state=document.getElementById("state").value;
                            
                            if(state==0){
                                alert("Please Choose Your State");
                                return false;
                            }
      var dist=document.getElementById("district").value;
                            
                            if(dist==0){
                                alert("Please Choose Your District");
                                return false;
                            }
                             var place=document.getElementById("city").value;
                            
                            if(place==0){
                                alert("Please Choose Your City");
                                return false;
                            }
                             var category=document.getElementById("category").value;
                            
                            if(category==0){
                                alert("Please Choose Category");
                                return false;
                            }
                             var comdate=document.getElementById("datetimepicker").value;
                            
                            if(comdate==""){
                                alert("Please fill complaint Description");
                                document.f1.complaint_date.focus();
                                return false;
                            }
                            var VictimName = document.getElementsByName('VictimName');
    for (i=0; i<VictimName.length; i++)
      {
       if (VictimName[i].value == "")
        {
         alert('Complete all the Name fields');   
         return false;
        }
                        }
                        var VictimAge = document.getElementsByName('VictimAge');
    for (i=0; i<VictimAge.length; i++)
      {
       if (VictimAge[i].value == "")
        {
         alert('Complete all the Age fields');    
         return false;
        }
      }
                       
                       
    for (i=0; i<VictimAge.length*2; i=i+2)
      {
                           
       if ((document.f1.VictimGender[i].checked==false)&& (document.f1.VictimGender[i+1].checked==false))
        {
                                   
         alert('Choose Gender');
                                
         return false;
        }
      }
                            return true;
        }