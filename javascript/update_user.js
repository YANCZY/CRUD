$(document).ready(function() {
    var userIdToUpdate; // Declare a variable to store the user ID for updating

    // Click event handler for "Edit" buttons
    $('.edit-user').click(function() {
        userIdToUpdate = $(this).data('bs-user-id');  // Store the user ID in the variable
        var name = $(this).data('bs-user-name');
        var email = $(this).data('bs-user-email');
        var username = $(this).data('bs-user-username');
        var mobile = $(this).data('bs-user-mobile');
        var phone = $(this).data('bs-user-phone');

        $('.userIdToUpdate').val(userIdToUpdate);


        // Populate modal fields with user data
        $('#updateModal .addName').val(name);
        $('#updateModal .addEmail').val(email);
        $('#updateModal .addUsername').val(username);
        $('#updateModal .addMobile').val(mobile);
        $('#updateModal .addPhone').val(phone);

        // Open the modal
        $('#updateModal').modal('show');
    });

    // Click event handler for "Update" button in the modal
    $('#updateButton').click(function() {
        var name = $('#updateModal .addName').val();
        var email = $('#updateModal .addEmail').val();
        var username = $('#updateModal .addUsername').val();
        var mobile = $('#updateModal .addMobile').val();
        var phone = $('#updateModal .addPhone').val();

        
       
        // Send AJAX request to updateuser.class.php
        $.ajax({
            type: 'POST',
            url: '../classes/updateuser.class.php',
            data: {
                'update': true,
                'userId': userIdToUpdate,
                'name': name,
                'email': email,
                'username': username,
                'mobile': mobile,
                'phone': phone,
            },
            success: function(response) {
                console.log(response);
                Swal.fire({
                title: 'Sucess',
                text: 'Updated Successfully',
                icon: 'success',
                confirmButtonText: 'Close'
                })
                setTimeout(function(){
                    location.reload();
                }, 1000);
               
                        
            },
            error: function(xhr, status, error) {
                console.log(error);
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