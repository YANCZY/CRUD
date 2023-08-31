<?php        
        include '../include/class-autoload.php';
        include '../classes/database.class.php';
        include '../classes/viewusers.class.php';
    

        $users = new ViewUser();

?>

<!doctype html>
<html lang="en">

    

<head>
        
        <meta charset="utf-8" />
        <title>CRUD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />



    </head>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-light.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <!-- <img src="assets/images/logo-light.png" alt="" height="19"> -->
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                                
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- MODAL ADD USER START-->
            <!-- ============================================================== -->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control addName" id="recipient-name" placeholder="Mikey">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control addEmail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exampl@test.com">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Username:</label>
                        <input type="text" class="form-control addUsername" id="recipient-name" placeholder="mikey">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" class="form-control addPassword" id="recipient-name" placeholder="12*">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Mobile:</label>
                        <input type="text" class="form-control addMobile" id="recipient-name" placeholder="+639552..">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Phone:</label>
                        <input type="text" class="form-control addPhone" id="recipient-name" placeholder="521-8554">
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="closecreate">Close</button>
                    <button type="button" class="btn btn-primary adduser" id="adduser">Submit</button>
                </div>
                </div>
            </div>
            </div>

            <!-- ============================================================== -->
            <!-- MODAL ADD USER END -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- MODAL Update USER Start -->
            <!-- ============================================================== -->

            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateModal">Update</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <input type="hidden" class="userIdToUpdate" id="userIdToUpdate" name="userIdToUpdate">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control addName" id="recipient-name" placeholder="Mikey">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control addEmail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exampl@test.com">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Username:</label>
                        <input type="text" class="form-control addUsername" id="recipient-name" placeholder="mikey">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" class="form-control addPassword" id="recipient-name" placeholder="12*">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Mobile:</label>
                        <input type="text" class="form-control addMobile" id="recipient-name" placeholder="+639552..">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Phone:</label>
                        <input type="text" class="form-control addPhone" id="recipient-name" placeholder="521-8554">
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="closecreate">Close</button>
                    <button type="button" class="btn btn-primary updateButton" id="updateButton">Update</button>
                </div>
                </div>
            </div>
            </div>




            <!-- ============================================================== -->
            <!-- MODAL Update USER End -->
            <!-- ============================================================== -->


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Users</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2 newuserbutton" id="newuserbutton" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="mdi mdi-plus me-1"></i>Add User</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap table-check">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="width: 20px;" class="align-middle">
                                                            <div class="form-check font-size-16">
                                                                <input class="form-check-input" type="checkbox" id="checkAll">
                                                                <label class="form-check-label" for="checkAll"></label>
                                                            </div>
                                                        </th>
                                                        <th class="align-middle">ID</th>
                                                        <th class="align-middle">Name</th>
                                                        <th class="align-middle">Email</th>
                                                        <th class="align-middle">Username</th>
                                                        <th class="align-middle">Mobile</th>
                                                        <th class="align-middle">Phone</th>
                                                        <th class="align-middle">View Details</th>
                                                        <th class="align-middle">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                <!-- GET ViewUser -->
                                                <?php  $users->getUsers() ?>

                                                </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- end modal -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Skote.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Themesbrand
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

         <!-- JQuery -->
         <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

           <!-- Swal Message Alert -->
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <script src="sweetalert2.all.min.js"></script>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
        
        <!-- Include the separate JavaScript file -->
        <script src="delete-user.js"></script>
        <script src="deleteUser.js"></script>
        
        <script>
            

            // Update Functionality 
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

        
             // Delete Functionality 
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
       </script>
    
        <!-- Add Functionality  -->
       <script src="../javascript/add_user.js"></script>

       
    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 10:49:19 GMT -->
</html>
