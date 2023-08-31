$(document).ready(function() {
    var userIdToUpdate; // Declare a variable to store the user ID for updating

    // Click event handler for "Edit" buttons
    $('.viewDeatails').click(function() {
        userIdToUpdate = $(this).data('bs-user-id');  // Store the user ID in the variable
        var name = $(this).data('bs-user-name');
        var email = $(this).data('bs-user-email');
        var username = $(this).data('bs-user-username');
        var mobile = $(this).data('bs-user-mobile');
        var phone = $(this).data('bs-user-phone');

        // Populate modal fields with user data
        $('#viewDeatails .addName').val(name);
        $('#viewDeatails .addEmail').val(email);
        $('#viewDeatails .addUsername').val(username);
        $('#viewDeatails .addMobile').val(mobile);
        $('#viewDeatails .addPhone').val(phone);

        // Open the modal
        $('#viewDeatails').modal('show');


    });
});