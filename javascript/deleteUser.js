$(document).ready(function() {
    $('.delete-user').click(function(e) {
        e.preventDefault();

        var userId = $(this).data('user-id');

        $.ajax({
            type: "POST",
            url: "deleteuser.php", // Change this to the actual PHP script for deleting users
            data: {
                'user_id': userId
            },
            success: function(response) {
                // Handle the success response (e.g., refresh the user list)
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle the error response
                console.log(status);
            }
        });
    });
});
