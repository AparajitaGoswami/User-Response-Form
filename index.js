function sendOTP(){

  // Generating a random 6-digit OTP
  var otp = Math.floor(100000 + Math.random() * 900000);
  
  var params = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    otp:otp,
  };
 


  // Setting EmailJS service ID and template ID
  var serviceID = 'service_jl3h4ls';
  var templateID = 'template_zijfpwm';
  
  emailjs
    .send(serviceID, templateID, params)
    .then((res) => {
      document.getElementById("name").value = "";
      document.getElementById("email").value = "";
      console.log(res);
      alert("Your OTP sent successfully!");

       // Making AJAX request to insert data into database
       var xhr = new XMLHttpRequest();
       xhr.open("POST", "sendotp.php", true);
       xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       xhr.onreadystatechange = function () {
         if (xhr.readyState === 4 && xhr.status === 200) {
           alert(xhr.responseText);
           jQuery('.second_box').show();
           jQuery('.first_box').hide();
         }
       };
       xhr.send(`Name=${params.name}&Email=${params.email}&OTP=${params.otp}`);
     })
    .catch((err) => {
      console.log(err);
      alert("An error occurred. Please check Email ID or try again later.");
    });
    

}



function checkOTP(){
  var params = {
    otp: document.getElementById("otp").value,
  };
  var xhr = new XMLHttpRequest();
        xhr.open("POST", "checkotp.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(`OTP=${params.otp}`);
        xhr.onreadystatechange = function () {
          if (xhr.readyState === 4 && xhr.status === 200) {
            alert(xhr.responseText);
            if(xhr.responseText=="Otp verified")
            {
              window.location='index.php';
            }
            
          }
        };
        
}




function sendMail() {
    var params = {
      fname: document.getElementById("fname").value,
      lname: document.getElementById("lname").value,
      email: document.getElementById("email").value,
      phone: document.getElementById("phone").value,
      question1: document.getElementById("question1").value,
      question2: document.getElementById("question2").value,
    };
    
    // Check if any required field is empty
    if (
      fname.value === "" ||
      lname.value === "" ||
      email.value === "" ||
      phone.value === "" ||
      question1.value === "" ||
      question2.value === ""
    ) {
      alert("Please fill in all the required fields.");
      return;
    }

    // Setting EmailJS service ID and template ID
    const serviceID = "service_jl3h4ls";
    const templateID = "template_dz1lind";
  
    emailjs
      .send(serviceID, templateID, params)
      .then((res) => {
        document.getElementById("fname").value = "";
        document.getElementById("lname").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("question1").value = "";
        document.getElementById("question2").value = "";
        console.log(res);
        alert("Your message sent successfully!");
  
        // Making AJAX request to insert data into database
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "insert.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(`First_Name=${params.fname}&Last_Name=${params.lname}&Email_ID=${params.email}&Phone_No=${params.phone}&Answer_1=${params.question1}&Answer_2=${params.question2}`);
        xhr.onreadystatechange = function () {
          if (xhr.readyState === 4 && xhr.status === 200) {
            alert(xhr.responseText); 
            
            //if (xhr.responseText=="Data inserted into database"){
              window.location='Thankyou.php';
            //}
      
          }
        };
      })
        .catch((err) =>{
          console.log(err);
          alert("Error sending the message. Please check the Email ID or try again later.");
        });
    
  }
  