<?php

header("Access-Control-Allow-Origin: *");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PCTFs Micro Labs - Powered by Parrot CTFs</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="https://s3.parrot-ctfs.com/659123908161e9.05122583.png" type="image/x-icon">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>

            body, .navbar, .footer {
                background: rgb(219, 73, 73);
                background: linear-gradient(90deg, rgba(219, 73, 73, 1) 0%, rgba(100, 34, 118, 1) 0%, rgba(20, 43, 73, 1) 58%);
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

            p {
                color: #ffffff;
            }
        </style>
    </head>
    <body>
        <?php require 'includes/nav.php'; ?>
        <style>
            .custom-gradient-background {
                background: rgb(219, 73, 73);
                background: linear-gradient(90deg, rgba(219, 73, 73, 1) 0%, rgba(100, 34, 118, 1) 0%, rgba(20, 43, 73, 1) 58%);
            }

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

            .parrot-beta {
                background-color: #1a375d ;
                border-color: #f5c6cb;
                color: #FFFFFF;
                padding: .75rem 1.25rem;
                border: 1px solid transparent;
                border-radius: .25rem;
            }
        </style>
        <div class="wrapper">
            <div class="content mb-3">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 mb-3">
                            <div class="parrot-beta">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Welcome to Parrot CTFs Micro Labs</h5>
                                    <hr>
                                    <p class="card-text">
                                        <strong>Parrot CTFs Micro Labs</strong> is a free-to-use, standalone web application designed to help you sharpen your cybersecurity skills through hands-on practice. Developed as a side app to our main platform, <a href="https://parrot-ctfs.com" class="text-primary">Parrot CTFs</a>, Micro Labs offers an immersive and educational experience for learners of all levels.
                                    </p>

                                    <h6 class="mt-4">Why Use Parrot CTFs Micro Labs?</h6>
                                    <ul>
                                        <li>
                                            <strong>Learn by Doing:</strong> Tackle real-world vulnerabilities in a safe and controlled environment.
                                        </li>
                                        <li>
                                            <strong>OWASP Top 10 and Beyond:</strong> Explore and exploit common vulnerabilities without the risk of damaging real systems.
                                        </li>
                                        <li>
                                            <strong>For All Skill Levels:</strong> Whether you’re a beginner or a seasoned security enthusiast, challenges range from basic to advanced.
                                        </li>
                                        <li>
                                            <strong>Free Access:</strong> Available to anyone looking to learn, test, and improve their cybersecurity expertise without barriers.
                                        </li>
                                    </ul>

                                    <h6 class="mt-4">Key Features</h6>
                                    <ul>
                                        <li><strong>Interactive Challenges:</strong> Practice exploiting vulnerabilities in a hands-on way.</li>
                                        <li><strong>Wide Variety of Scenarios:</strong> Go beyond the basics with scenarios that mimic real-world vulnerabilities.</li>
                                        <li><strong>Micro Challenges: </strong>Master individual vulnerabilities with precision without the need to complete a full CTF.</li>
                                    </ul>

                                    <p class="card-text mt-4 mb-3">
                                        Micro Labs is part of our mission to make cybersecurity education accessible, engaging, and practical. While our flagship platform at <a href="https://parrot-ctfs.com" class="text-primary">Parrot CTFs</a> offers comprehensive gamified challenges, Micro Labs focuses on helping you master individual vulnerabilities with precision.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="parrot-beta">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3">Challenges List </h5>
                                    <p class="card-text">Here are some of the challenges you can try out:</p>

                                    <ul>
                                        <li><a href="/challenge/bypassing-user-agent-protections.php">Bypassing User Agent Protections</a></li>
                                        <li><a href="/challenge/brute-forcing-login.php">Brute Forcing Login</a></li>
                                        <li><a href="/challenge/finding-xss.php">Cross Site Scripting</a></li>
                                        <li><a href="/challenge/session-highjacking.php">Session Highjacking</a></li>
                                        <li><a href="/challenge/external-dns-interactions.php">External DNS Interactions</a></li>
                                        <li><a href="/challenge/ssrf-with-collaborator.php">Server Side Request Forgery</a></li>
                                        <li><a href="/challenge/cross-site-request-forgery.php">Cross Site Request Forgery</a></li>
                                    </ul>
                                    
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-12 text-center">
                                                <!-- View code on GitHub button -->
                                                <a href="https://github.com/zzzzz" class="btn btn-primary btn-block mt-3" target="_blank" aria-label="View code on GitHub">
                                                    <i class="fab fa-github"></i> View Code on GitHub
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'includes/footer.php'; ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script>
            function updateCountdown() {
                const now = new Date();
                const nextReset = new Date();
                nextReset.setUTCDate(now.getUTCDate());
                nextReset.setUTCHours(5, 0, 0, 0); // 00:00 EST is 05:00 UTC
                if (now.getUTCHours() >= 5) {
                    nextReset.setUTCDate(now.getUTCDate() + 1);
                }
                
                const diff = nextReset - now;
                const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((diff % (1000 * 60)) / 1000);
                
                document.getElementById("countdown").innerHTML = `Resets in ${hours}h ${minutes}m ${seconds}s`;
            }

            setInterval(updateCountdown, 1000);
        </script>
    </body>
</html>