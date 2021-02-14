
// $('#confirmPassword').on('keyup', function () {
//     if ($('#password').val() === $('#confirmPassword').val()) {
//         $('#submitBtn').prop('disabled', false);
//         $('#messages').html('Password match').css('color', 'green');
//     } else {
//         $('#submitBtn').prop('disabled', true);
//         $('#messages').html('Password did not match').css('color', 'red');
//     }
// });

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
        }
       
    });
});


$(document).ready(function(){
    $('#password , #confirmPassword').on('keyup',function(){
        var confirmPassword = $('#confirmPassword').val();
        var Password = $('#password').val();

        if(confirmPassword != Password || Password.length < 8){
            $('#submitBtn').prop('disabled', true);
            $('#messages').html('Password must be 8 character long').css('color', 'red');
        }
        else{
            $('#submitBtn').prop('disabled', false);
            $('#messages').html('').css('color', 'red');
        }

    });
 });