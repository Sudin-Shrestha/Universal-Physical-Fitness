$('#email').on('keyup', function (){
    fetch('http://localhost/fitness/api/check/email/' + $('#email').val())
    .then(response => response.json())
    .then(data => {
        if(data.exist){
            $('#message').html("Email Already Exist").css('color','red');
            $('#submitBtn').prop('disabled', true);
            
        }else{
            $('#message').html("");
            $('#submitBtn').prop('disabled', false);
        }
       
    });
});
