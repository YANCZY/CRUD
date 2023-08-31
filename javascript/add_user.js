$(document).ready(function() {
    $('.adduser').click(function(e) {
        e.preventDefault();

        var name = $('.addName').val();
        var email = $('.addEmail').val();
        var username = $('.addUsername').val();
        var password = $('.addPassword').val();
        var mobile = $('.addMobile').val();
        var phone = $('.addPhone').val();


        $.ajax({
            type: "POST",
            url: "../classes/createuser.class.php",
            data: {
                'submit': true,
                'name': name,
                'email': email,
                'username': username,
                'password': password,
                'mobile': mobile,
                'phone': phone,
            },
            success: function(response) {
                console.log(response);
                Swal.fire({
                    title: 'Sucess',
                    text: 'Created Successfully',
                    icon: 'success',
                    confirmButtonText: 'Close'
                    })
                    setTimeout(function(){
                        location.reload();
                    }, 1000);
                    
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    title: 'Error',
                    text: 'Check Connection',
                    icon: 'error',
                    confirmButtonText: 'Close'
                    })
            }
        });
    });
});