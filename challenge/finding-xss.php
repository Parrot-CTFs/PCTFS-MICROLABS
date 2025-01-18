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
                    <h1 class="text-center">Finding XSS</h1>
                    <p class="text-center">In this lab, you will be tasked with finding the XSS vulnerability in the given website.</p>
                    <br>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col">
                            <form action="" method="GET">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Enter Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="col mx-5 text-center">
                            <?php
                                if (isset($_GET['name'])) {
                                    $name = $_GET['name'];
                                    echo "<p>Welcome, $name!</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require '../includes/footer.php'; ?>
    </body>
</html>