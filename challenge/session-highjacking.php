<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hacker Labs - Powered by Parrot CTFs</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="https://s3.parrot-ctfs.com/659123908161e9.05122583.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            body {
                background-color: #142B49;
                color: #fff; /* Ensuring the text is readable on the dark background */
            }

            .navbar {
                background-color: #142B49;
                width: 100%;
            }

            .navbar .navbar-brand,
            .navbar .nav-link,
            .navbar .btn {
                color: #fff; /* Ensuring the text and buttons are readable on the dark background */
            }

            .footer {
                background: #142B49;
                padding: 1rem 0;
                width: 100%;
                text-align: center;
                color: #fff; /* Ensuring the text is readable on the dark background */
            }

            .wrapper {
                display: flex;
                flex-direction: column;
                min-height: 100%;
            }

            .content {
                flex: 1;
            }
        </style>
    </head>
    <body>
        <?php require '../includes/nav.php'; ?>
        <style>
            .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu > .dropdown-menu {
                top: 0;
                left: auto;
                right: 100%;
                margin-top: -6px;
            }

            .dropdown-submenu:hover > .dropdown-menu {
                display: block;
            }

            .dropdown-menu-left {
                left: auto;
                right: 100%;
            }
        </style>
        <div class="wrapper">
            <div class="content">
                <br><br><br><br>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <h1>Session Highjacking</h1>
                            <p>Session hijacking is the act of taking control of a user session after successfully obtaining or generating an authentication session ID. In this lab you will login as John and try to take over Alex's Session</p>
                            <div class="row mt-5">
                                <div class="col">
                                    <form action="/api/session-highjacking.php" method="post">
                                        <input type="hidden" name="username" value="john">
                                        <input type="hidden" name="password" value="password123">
                                        <button type="submit" class="btn btn-primary">Login as John</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3 class="mt-5"> <?php if(isset($_SESSION['username'])) { echo "Welcome, ".$_SESSION['username']; } ?> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <?php require '../includes/error_handling.php'; ?>
        <?php require '../includes/footer.php'; ?>
    </body>
</html>