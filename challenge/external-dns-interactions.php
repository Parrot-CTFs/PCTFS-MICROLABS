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
                            <h1>External DNS Interactions</h1>
                            <p>External DNS interactions are a common way to interact with a server. In this lab we will interact with Burps Collaborator via External DNS Interaction</p>
                            <div class="row">
                                <div class="col">
                                    <form action="" method="POST">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Enter Your Favorite Website</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <?php
                                        if (isset($_POST['name'])) {
                                            $url = $_POST['name'];

                                            // filter the url
                                            $url = filter_var($url, FILTER_SANITIZE_URL);

                                            // check if it has https or nothing and then add https if it doesn't
                                            if (strpos($url, 'https://') === false && strpos($url, 'http://') === false) {
                                                $url = 'https://' . $url;
                                            }

                                            echo "<p>Interacting with: </p>";
                                            echo "<a href='$url' target='_blank'>$url</a>";

                                            // interact with the url via server 
                                            $ch = curl_init($url);

                                            // set the options
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                            curl_setopt($ch, CURLOPT_HEADER, true);
                                            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                                            curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
                                            curl_setopt($ch, CURLOPT_TIMEOUT, 10);

                                            // execute the request
                                            $response = curl_exec($ch);

                                            // close the connection
                                            curl_close($ch);
                                        }else{
                                            echo "<p>Enter a website to interact with</p>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <?php require '../includes/footer.php'; ?>
    </body>
</html>