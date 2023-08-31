$(document).ready(function() {
    // Click event handler for delete buttons
    $('.delete-user').click(function() {
        var userId = $(this).data('user-id');

        // Display a confirmation dialog
        Swal.fire({
            title: 'Confirm Delete',
            text: 'Are you sure you want to delete this user?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Send AJAX request to deleteuser.class.php
                $.ajax({
                    type: 'POST',
                    url: '../classes/deleteuser.class.php',
                    
                    data: {
                        'delete': true,
                        'userId': userId
                    },
                    
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.status === 'success') {
                            // Reload the page after successful deletion
                            Swal.fire({
                                title: 'Sucess',
                                text: 'Deleted Successfully',
                                icon: 'success',
                                confirmButtonText: 'Close'
                            })
                            setTimeout(function(){
                                location.reload();
                            }, 1000);

                        } else {
                            // Display an error message
                            Swal.fire({
                                title: 'Error',
                                text: data.message,
                                icon: 'error',
                                confirmButtonText: 'Close'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        // Display an error message
                        console.log(error);
                        console.log(status);
                        Swal.fire({
                            title: 'Error',
                            text: 'An error occurred while deleting the user.',
                            icon: 'error',
                            confirmButtonText: 'Close'
                        });
                    }
                });
            }
        });
    });
});