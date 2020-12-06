
$('#confirmPassword').on('keyup', function () {
    if ($('#password').val() === $('#confirmPassword').val()) {
        $('#message').html('Password match').css('color', 'green');
        $('#submitBtn').show();
    } else {
        $('#message').html('Password did not match').css('color', 'red');
        $('#submitBtn').hide();
    }
      
});

$('#email').on('keyup', function (){
    fetch('http://localhost/fitness/api/check/email/' + $('#email').val())
    .then(response => response.json())
    .then(data => {
        if(data.exist){
            $('#message').html("Email Already Exist");
            $('#submitBtn').hide();
        }else{
            $('#message').html("Email Available");
            $('#submitBtn').show();
        }
       
    });
});

