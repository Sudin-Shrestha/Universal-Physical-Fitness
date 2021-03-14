
// $(document).ready(function(){
//     $('#firstName').on('keyup',function(){
//         var fname = $('#firstName').val();

//         if(fname != ""){
//             $('#submitBtn').prop('disabled', false);
//             $('#firstName').css('border','2px solid green');
//         }
//         else{
//             $('#submitBtn').prop('disabled', true);
//             $('#firstName').css('border','2px solid red');
//         }

//     });
//  });

//  $(document).ready(function(){
//     $('#lastName').on('keyup',function(){
//         var lname = $('#lastName').val();
//         if(lname != ""){
//             $('#submitBtn').prop('disabled', false);
//             $('#lastName').css('border','2px solid green');
//         }
//         else{
//             $('#submitBtn').prop('disabled', true);
//             $('#lastName').css('border','2px solid red');
//         }

//     });
//  });

//  $(document).ready(function(){
//     $('#address').on('keyup',function(){
//         var address = $('#address').val();
//         if(address != ""){
//             $('#submitBtn').prop('disabled', false);
//             $('#address').css('border','2px solid green');
//         }
//         else{
//             $('#submitBtn').prop('disabled', true);
//             $('#address').css('border','2px solid red');
//         }

//     });
//  });

//  $(document).ready(function(){
//     $('#phone').on('keyup',function(){
//         var phone = $('#phone').val();
//         if(phone != ""){
//             $('#submitBtn').prop('disabled', false);
//             $('#phone').css('border','2px solid green');
//         }
//         else{
//             $('#submitBtn').prop('disabled', true);
//             $('#phone').css('border','2px solid red');
//         }

//     });
//  });




// $('#email').on('keyup', function (){
//     var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
//     var email = $('#email').val();
//     if(!mailformat.test(email)){
//         $('#submitBtn').prop('disabled', true);
//         $('#invalidEmail').html("Invalid Email").css('color','red');
//         $('#email').css('border','2px solid red');
        
//     }else{
//         $('#submitBtn').prop('disabled', false);
//         $('#invalidEmail').html("");
//         $('#email').css('border','2px solid green'); 
//     }
 
// });
function showPw() {
    var x = document.getElementById("password");
    var y = document.getElementById("confirmPassword");
    if (x.type === "password" && y.type === "password") {
      x.type = "text";
      y.type = "text";
    } else {
      x.type = "password";
      y.type = "password";
    }
  }

  function showPws() {
    var a = document.getElementById("passwords");
    if (a.type === "password") {
      a.type = "text";
  
    } else {
      a.type = "password";

    }
  }

 
$(document).ready(function(){
    $('#password').on('keyup',function(){
        var Password = $('#password').val();

        if(Password.length < 8){
            $('#password').css('border','2px solid red');
        }
        else{
            $('#password').css('border','2px solid green');
        }

    });
 });




$(document).ready(function(){
    $('#password , #confirmPassword').on('keyup',function(){
        var confirmPassword = $('#confirmPassword').val();
        var Password = $('#password').val();

        if(confirmPassword != Password || Password.length < 8){
            $('#submitBtn').prop('disabled', true);
            $('#messages').html('Password should match and must be 8 character long').css('color', 'red');
            $('#confirmPassword').css('border','2px solid red');
        }
        else{
            $('#submitBtn').prop('disabled', false);
            $('#messages').html('').css('color', 'red');
            $('#password').css('border','2px solid green');
            $('#confirmPassword').css('border','2px solid green');
        }

    });
 });

 $('#email').on('keyup', function (){
    fetch('http://localhost/fitness/api/check/email/' + $('#email').val())
    .then(response => response.json())
    .then(data => {
        if(data.exist){
            $('#submitBtn').prop('disabled', true);
            $('#message').html("Email Already Exist").css('color','red');
        }else{
            $('#submitBtn').prop('disabled', false);
            $('#message').html("");
            // $('#email').css('border','2px solid green');
        }
       
    });
});

const VALID_NAME = /^[a-zA-Z]+$/;

const firstName = document.getElementById("firstName");
const firstNameStatus = document.getElementById("firstNameStatus");

function validateFirstName(){

    firstName.value = firstName.value.replace(/[^A-Za-z]/g, '');

    if(firstName.value.length == 0){

        firstName.style.backgroundColor = '#ffeeee'; // red
        firstNameStatus.style.color = '#ff8888'; // red
        firstNameStatus.innerText = 'Empty';

    }else if (firstName.value.length > 2 && VALID_NAME.test(String(firstName.value)) ){

        firstName.style.backgroundColor = '#eeffee'; // green
        firstNameStatus.innerText = '';

    } else{

        firstName.style.backgroundColor = '#ffeeee'; // red
        firstNameStatus.style.color = '#ff8888'; // red
        firstNameStatus.innerText = 'Invalid';

    }
}

firstName.addEventListener("keyup", validateFirstName);
firstName.addEventListener("focusin", validateFirstName);
firstName.addEventListener("focusout", () => {firstName.style.backgroundColor = ""; firstNameStatus.innerText = '';});

// For Validating Last Name

const lastName = document.getElementById("lastName");
const lastNameStatus = document.getElementById("lastNameStatus");

function validateLastName(){

    lastName.value = lastName.value.replace(/[^A-Za-z]/g, '');

    if(lastName.value.length == 0){

        lastName.style.backgroundColor = '#ffeeee'; // red
        lastNameStatus.style.color = '#ff8888'; // red
        lastNameStatus.innerText = 'Empty';

    }else if (lastName.value.length > 2 && VALID_NAME.test(String(lastName.value)) ){

        lastName.style.backgroundColor = '#eeffee'; // green
        lastNameStatus.innerText = '';

    } else{

        lastName.style.backgroundColor = '#ffeeee'; // red
        lastNameStatus.style.color = '#ff8888'; // red
        lastNameStatus.innerText = 'Invalid';

    }
}

lastName.addEventListener("keyup", validateLastName);
lastName.addEventListener("focusin", validateLastName);
lastName.addEventListener("focusout", () => {lastName.style.backgroundColor = ""; lastNameStatus.innerText = '';});

// For Validating Email Field

const VALID_EMAIL = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

const email = document.getElementById("email");
const emailStatus = document.getElementById("emailStatus");

function validateEmail() {
    
    if(email.value.length == 0){

        email.style.backgroundColor = '#ffeeee'; // red
        emailStatus.style.color = '#ff8888'; // red
        emailStatus.innerText = 'Empty email';

    }else if (email.value.length > 6 && VALID_EMAIL.test(String(email.value).toLowerCase()) ){

        email.style.backgroundColor = '#eeffee'; // green
        emailStatus.innerText = '';

    } else{

        email.style.backgroundColor = '#ffeeee'; // red
        emailStatus.style.color = '#ff8888'; // red
        emailStatus.innerText = 'Invalid email';

    }
}

email.addEventListener("keyup", validateEmail);
email.addEventListener("focusin", validateEmail);
email.addEventListener("focusout", () => {email.style.backgroundColor = ""; emailStatus.innerText = '';});

// For Validating Phone Number
const phoneNumber = document.getElementById("phone");
const phoneNumberStatus = document.getElementById("phoneStatus");

function validatePhoneNumber() {

    phoneNumber.value = phoneNumber.value.replace(/\D/g,'');
    
    if(phoneNumber.value.length == 0){

        phoneNumber.style.backgroundColor = '#ffeeee'; // red
        phoneNumberStatus.style.color = '#ff8888'; // red
        phoneNumberStatus.innerText = 'Empty phone number';

    }else if (phoneNumber.value.length > 9 && phoneNumber.value.match(/\d/g).length===10){

        phoneNumber.style.backgroundColor = '#eeffee'; // green
        phoneNumberStatus.innerText = '';

    } else{

        phoneNumber.style.backgroundColor = '#ffeeee'; // red
        phoneNumberStatus.style.color = '#ff8888'; // red
        phoneNumberStatus.innerText = 'Invalid phone number';

    }
}

phoneNumber.addEventListener("keyup", validatePhoneNumber);
phoneNumber.addEventListener("focusin", validatePhoneNumber);
phoneNumber.addEventListener("focusout", () => {phone.style.backgroundColor = ""; phoneStatus.innerText = '';});


// For Validating address

const address = document.getElementById("address");
const addressStatus = document.getElementById("addressStatus");

function validateAddress(){

    address.value = address.value.replace(/[^A-Za-z]/g, '');

    if(address.value.length == 0){

        address.style.backgroundColor = '#ffeeee'; // red
        addressStatus.style.color = '#ff8888'; // red
        addressStatus.innerText = 'Empty';

    }else if (address.value.length > 2 && VALID_NAME.test(String(address.value)) ){

        address.style.backgroundColor = '#eeffee'; // green
        addressStatus.innerText = '';

    } else{

        address.style.backgroundColor = '#ffeeee'; // red
        addressStatus.style.color = '#ff8888'; // red
        addressStatus.innerText = 'Invalid';

    }
}
address.addEventListener("keyup", validateAddress);
address.addEventListener("focusin", validateAddress);
address.addEventListener("focusout", () => {address.style.backgroundColor = ""; addressStatus.innerText = '';});