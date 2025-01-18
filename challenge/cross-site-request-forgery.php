<?php

if(isset($_POST['signout'])){
    setcookie('authenticated', 'false', time() + (86400 * 30), '/');
}

if(isset($_POST['signin'])){
    setcookie('authenticated', 'true', time() + (86400 * 30), '/');
}

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
        <div class="wrapper">
            <div class="content">
                <br><br><br>
                <div class="container mt-5">
                    <h1>Cross Site Request Forgery</h1>
                    <p>
                        Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web application in which they are currently authenticated. 
                    </p>
                    <?php
                        $current_email = 'testing@pctfs-microlabs.com';
                        $authenticated = false; 
                        
                        if(isset($_COOKIE['authenticated']) && $_COOKIE['authenticated'] == 'true'){
                            $authenticated = true;
                        }

                        if($authenticated == true){
                            $email = $_POST['email'];
                            if(isset($email)){
                                $current_email = $email;
                            }
                        }
                        
                        echo '
                            <p class="mt-2">Current Email Address: '.$current_email.'</p>
                        ';

                        if($authenticated == true){
                            echo '
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">New Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Email</button>
                                </form>
                            ';
                        }
                    ?>  
                    <form action="" method="post">
                        <div class="mb-3 mt-3">
                            <?php
                                if($_COOKIE['authenticated'] == 'true'){
                                    echo '
                                        <input type="hidden" name="signout" value="true">
                                        <button type="submit" class="btn btn-danger">Signout</button>
                                    ';
                                }else{
                                    echo '
                                        <input type="hidden" name="signin" value="true">
                                        <button type="submit" class="btn btn-success mt-3">Signin</button>
                                    ';
                                }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php require '../includes/footer.php'; ?>
    </body>
</html>
