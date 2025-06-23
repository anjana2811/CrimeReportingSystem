<!DOCTYPE html>
<html>
  <head>
    <title>Form Validation</title>
    <!-- Latest compiled and minified BootStarp CSS -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
                 </script>
    <!-- jQuery Form Validation library -->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js">
              </script>
  </head>
  <body>
    <div id="page-wrapper" >
      <div class="container" >
        <h1>
          Form Validation
        </h1>
        <style type="text/css">
    #form .form-group label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 0px 0 0px 0px;
    padding: 0;
    text-align: left;
    }
</style>
<script type="text/javascript">
  (function ($, W, D)
  {
  var JQUERY4U = {};
  JQUERY4U.UTIL =
      {
          setupFormValidation: function ()
          {
          //form validation rules
          $("#myForm").validate({
              rules: {
              name: "required",
              url: {
                  required: true,
                  url: true
              },
              phone: {
                      required: true,
                       minlength: 10,
                       pattern: [/^[7-9]{1}[0-9]{9}$/], 
                  },
              email: {
                      required: true,
                      email: true
                  },
              code: {
                      required: true,
                      rangelength: [11, 11]
                  },
              min_length:{
                      required: true,
                      minlength: 3
                  },
              number: {
                  digits: true,
                  required:true,
                  minlength:5
                  }
              },
              messages: {
              name: "Please Enter Name",
              phone: "Please Enter Valid Mobile Number",
              email: "Please Enter valid Email",
              code: "Please Enter 11 Digit code",
              min_length:"Please Enter Minimum 3 Digit",
              number: "Please Enter Only Digits",
              url: "Please Enter Website Url"
              },
              submitHandler: function (form) {
              form.submit();
              }
          });
        }
      }
  //when the dom has loaded setup form validation rules
  $(D).ready(function ($) {
      JQUERY4U.UTIL.setupFormValidation();
  });
  })(jQuery, window, document);
</script>
        <form name="myForm" class="form-horizontal" id ="myForm"
                 action="#"  method="POST" enctype="multipart/form-data">
          <div class="panel panel-info">
            <div class="panel-heading">Form validation</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name" class="col-md-4">Name *</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="name"
                                placeholder="Enter Name" required/>
                      </div>
                    </div>
                    <div class="form-group" >
                      <label for="Mobile" class="col-md-4">Mobile *</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control"  name="phone"
                            placeholder="Enter Mobile Number" required/>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="email" class="col-md-4">Email </label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="email"
                              placeholder="Enter  Email" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="code" class="col-md-4">Code(Exact 11 digit) </label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="code"
                             placeholder="Enter code" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="code" class="col-md-4">Min Length </label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="min_length"
                                       placeholder="Enter code" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="code" class="col-md-4">Number </label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="number"
                               placeholder="Enter Only digits" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="url" class="col-md-4">Website </label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="url"
                                placeholder="Enter Url" >
                      </div>
                    </div>
                  </div>
                  <!-- end div -->
                </div>
                <!-- end div -->
              </div>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-4" style="margin-bottom: 50px;">
            <center>
              <input type="submit" class="btn btn-primary" value="Submit" />
            </center>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>