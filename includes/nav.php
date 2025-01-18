 <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="https://s3.parrot-ctfs.com/659123908161e9.05122583.png" alt="Parrot CTFs" width="30" height="30" class="d-inline-block align-text-top"> Parrot CTFs</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <p id="countdown" class="mt-3 mx-2"></p>

                <?php 

                    // check if the URI is not just straight / and that it is something else 
                    $current_uri = $_SERVER['REQUEST_URI'];

                    if ($current_uri !== "/") {
                        echo '<a href="/" class="text-white mx-5">Back</a>';
                    }
                ?>
                
                <!--    
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Course Labs
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Burp Suite Basics</a>
                                    <ul class="dropdown-menu dropdown-menu-left">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Using The Intruder </a>
                                            <ul class="dropdown-menu dropdown-menu-left">
                                                <li><a class="dropdown-item" href="/burp-suite-basics/bypassing-user-agent-protections.php">Bypassing User Agent Protections</a></li>
                                                <li><a class="dropdown-item" href="/burp-suite-basics/brute-forcing-login.php">Brute Forcing Login </a></li>
                                                <li><a class="dropdown-item" href="/burp-suite-basics/finding-xss.php">Finding XSS</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Using The Sequencer</a>
                                            <ul class="dropdown-menu dropdown-menu-left">
                                                <li><a class="dropdown-item" href="/burp-suite-basics/session-highjacking.php">Session Highjacking</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Using The Collaborator</a>
                                            <ul class="dropdown-menu dropdown-menu-left">
                                                <li><a class="dropdown-item" href="/burp-suite-basics/external-dns-interactions.php">External DNS Interactions</a></li>
                                                <li><a class="dropdown-item" href="/burp-suite-basics/ssrf-with-collaborator.php">Server Side Request Forgery</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                -->
                </div>
            </div>
        </nav>