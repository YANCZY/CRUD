class UserDeleter {
    constructor() {
        this.deleteButtons = $('.delete-user');
        this.init();
    }

    init() {
        this.deleteButtons.click(this.deleteUser.bind(this));
    }

    deleteUser(event) {
        event.preventDefault();
        var userId = $(event.target).data('user-id');

        Swal.fire({
            title: 'Confirm Delete',
            text: 'Are you sure you want to delete this user?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: 'deleteuser.class.php', // Change the URL to the correct path
                    data: {
                        'delete': true,
                        'userId': userId
                    },
                    success: this.handleSuccess.bind(this),
                    error: this.handleError.bind(this)
                });
            }
        });
    }

    handleSuccess(response) {
        console.log(response);
        Swal.fire({
            title: 'Success',
            text: 'User deleted successfully',
            icon: 'success',
            confirmButtonText: 'Close'
        });
        setTimeout(() => {
            location.reload();
        }, 1000);
    }

    handleError(xhr, status, error) {
        Swal.fire({
            title: 'Error',
            text: 'Failed to delete user',
            icon: 'error',
            confirmButtonText: 'Close'
        });
    }
}

$(document).ready(function() {
    new UserDeleter();
});
