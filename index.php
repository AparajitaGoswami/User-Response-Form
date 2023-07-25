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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    /> 
    <script src="index.js"></script>
    <script src="sendotp.php"></script>
    <script src="checkotp.php"></script>
    <script src="insert.php"></script>
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
            

              <div class="form-group">
                <h5 for="fname">First Name</h5>
                <input
                type="text"
                class="form-control"
                id="fname"
                placeholder="Enter first name"
                name="First_Name"
                required
                autocomplete="off"
                oninput="validateInput('fname', 'fnameError')"
                />
                <small id="fnameError" style="color: red; display: none;">
                Please enter only one word.
                </small>
              </div>

              <div class="form-group">
                <h5 for="lname">Last Name</h5>
                <input
                type="text"
                class="form-control"
                id="lname"
                placeholder="Enter last name"
                name="Last_Name"
                required
                autocomplete="off"
                oninput="validateInput('lname', 'lnameError')"
                />
                <small id="lnameError" style="color: red; display: none;">
                Please enter only one word.
                </small>
              </div>

              <div class="form-group">
                <h5 for="email">Email</h5>
                <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Enter email"
                name="Email_ID"
                required
                autocomplete="off"
                />
              </div>

              <div class="form-group">
                <h5 for="phone">Phone Number</h5>
                <input
                type="tel"
                class="form-control"
                id="phone"
                placeholder="Enter phone number"
                name="Phone_No"
                maxlength="10"
                required
                autocomplete="off"
                oninput="validatePhoneNumber(this)" <!-- Add oninput event handler -->
       
                <small id="phoneError" class="text-danger"></small>
              
              </div>

              <div class="form-group">
                <h5 for="question1">Question 1</h5>
                <select class="form-control" id="question1" name="Answer_1" required>
                  <option>Strongly Agree</option>
                  <option>Agree</option>
                  <option>Neutral</option>
                  <option>Disagree</option>
                  <option>Strongly Disagree</option>
                </select>
              </div>
            
              <div class="form-group">
                <h5 for="question2">Question 2</h5>
                <select class="form-control" id="question2" name="Answer_2" required>
                  <option>Strongly Agree</option>
                  <option>Agree</option>
                  <option>Neutral</option>
                  <option>Disagree</option>
                  <option>Strongly Disagree</option>
                </select>
              </div>

              <button type="button" class="btn btn-primary btn-block" onclick="sendMail()">Submit</button>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>

<script>
  function validatePhoneNumber(input) {
    const phoneInput = input.value;
    const phoneError = document.getElementById("phoneError");

    if (phoneInput.length !== 10) {
      phoneError.textContent = "Phone number must be 10 digits.";
    } else {
      phoneError.textContent = "";
    }
  }

  function validateInput(inputId, errorId) {
    const input = document.getElementById(inputId);
    const error = document.getElementById(errorId);
    const words = input.value.trim().split(" ");
    if (words.length > 1) {
      input.value = words[0]; // Set the input value to the first word
      error.style.display = "inline";
    } else {
      error.style.display = "none";
    }
  }
</script>