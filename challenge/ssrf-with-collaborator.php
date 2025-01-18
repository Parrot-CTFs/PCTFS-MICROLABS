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
                            <h1>Server Side Request Forgery</h1>
                            <p> SSRF is a vulnerability that allows an attacker to force an application to make requests on their behalf. This can be used to access internal resources, pivot through the network, and even interact with external services. </p>
                            
                            <div class="row">
                                <div class="col">
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label for="url" class="form-label">Enter Link to Show Image </label>
                                            <input type="text" class="form-control" id="url" name="url" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <?php
                                        if (isset($_POST['url'])) {
                                            $url = $_POST['url'];

                                            // filter url 
                                            $url = filter_var($url, FILTER_SANITIZE_URL);

                                            // make sure url contains http:// or https://
                                            if (strpos($url, 'https://') === false && strpos($url, 'http://') === false) {
                                                $url = 'https://' . $url;
                                            }

                                            // check if url exists with a 200 via curl 
                                            $ch = curl_init($url);

                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                                            curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
                                            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                                            curl_setopt($ch, CURLOPT_HEADER, true);

                                            $response = curl_exec($ch);
                                            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                            curl_close($ch);

                                            if ($httpcode !== 200) {
                                                echo "<p class='text-danger mt-5'>URL does not exist</p>";
                                                exit();
                                            }else{
                                                echo "<img src='$url' class='img-fluid mt-5'>";
                                            }

                                        
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require '../includes/footer.php'; ?>
    </body>
</html>