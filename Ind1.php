<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script src="index.js"></script>
    <script src="insert.php"></script>
    <script src="sendotp.php"></script>
    <script src="checkotp.php"></script>
    <script src="Thankyou.php"></script>

    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
      (function () {
        emailjs.init("p0GeESscq7lwPDCkL");
      })();

    </script>
  </head>
  <body>
   
  <div class="login-form">
    <form method="POST">
    <div class="container border mt-3 bg-light">
      <div class="row">
        <div class="col-md-6 p-5 bg-primary text-white">
          <h1>Hi there!</h1>
          <h4>
            CONTACT FORM
          </h4>
        </div>
        <div class="col-md-6 border-left py-3">
          <h1>Contact form</h1>
            

              <div class="form-group first_box">
                <h5 for="name">Name</h5>
                <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Enter name(Optional)"
                name="Name"
                autocomplete="off"
                required
                />
              </div>
              
              <div class="form-group first_box">
                <h5 for="email">Email</h5>
                <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Enter email(Required)"
                name="Email_ID"
                autocomplete="off"
                required
                />
              </div>

              <div class="form-group first_box">
            <button type="button" class="btn btn-primary btn-block" onclick="sendOTP()">Send OTP</button>
        </div>
        <div class="form-group second_box">
        <h5 for="otp">Confirm OTP</h5>
            <input type="text" id="otp" class="form-control" placeholder="OTP" required="required">
			<span id="otp_error" class="field_error"></span>
        </div>
        <div class="form-group second_box">
            <button type="button" class="btn btn-primary btn-block" onclick="checkOTP()">Submit OTP</button>
        </div>       
            </form>
    </div>
        </div>
      </div>
    </div>

<style>
.second_box{display:none;}
.field_error{color:red;}
</style>
   
  </body>
</html>

