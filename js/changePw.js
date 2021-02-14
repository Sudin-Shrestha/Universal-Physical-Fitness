
$('#oldPassword').on('keyup', function () {
    if ($('#oldPasswords').val() === $('#oldPassword').val()) {
        $('#passwordChangeBtn').prop('disabled', false);
        $('#pwOldMatch').html('Old Password Match').css('color', 'green');
    } else {
        $('#passwordChangeBtn').prop('disabled', true);
        $('#pwOldMatch').html('Password did not match').css('color', 'red');
    }
});


$(document).ready(function(){
    $('#updatedPassword , #matchPassword').on('keyup',function(){
        var matchPassword = $('#matchPassword').val();
        var updatePassword = $('#updatedPassword').val();

        if(matchPassword != updatePassword || updatePassword.length < 8){
            $('#passwordChangeBtn').prop('disabled', true);
            $('#validChar').html('Password must be 8 character long and should match').css('color', 'red');
            $('#twoPwMatch').html('password Did not match').css('color', 'red');
        }
        else{
            $('#passwordChangeBtn').prop('disabled', false);
            $('#validChar').html('').css('color', 'red');
            $('#twoPwMatch').html('password match').css('color', 'green');
        }


    });
 });

 $('#updatedEmail').on('keyup', function (){
    fetch('http://localhost/fitness/api/check/email/' + $('#updatedEmail').val())
    .then(response => response.json())
    .then(data => {
        if(data.exist){
            $('#updateCustomer').prop('disabled', true);
            $('#emailMatch').html("Email Already Exist").css('color','red');
            
        }else{
            $('#updateCustomer').prop('disabled', false);
            $('#emailMatch').html("");
        }
       
    });
});