<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Filter username and password 
$username = filter_var($username, FILTER_SANITIZE_STRING);
$password = filter_var($password, FILTER_SANITIZE_STRING);

// Escape for HTML context to prevent XSS when echoing into JavaScript
$username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
$password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

if (isset($_COOKIE['PHPSESSID']) && $_COOKIE['PHPSESSID'] == 'hackerlabs1136') {
    // Set session value to PHPSESSION=hackerlabs1136 if it is alex
    $_SESSION['username'] = 'alex';
    header("Location: /burp-suite-basics/session-highjacking.php?msg=You have successfully hijacked Alex's session&type=success");
    exit;
} elseif ($username == "john" && $password == "password123") {
    // Set session value to PHPSESSION=hackerlabs1111 if it is john
    $_SESSION['username'] = $username;
    setcookie("PHPSESSID", "hackerlabs1111", time() + 3600, "/"); // Set cookie for 1 hour
    header("Location: /burp-suite-basics/session-highjacking.php?msg=You have successfully logged in as John&type=success");
    exit;
} else {
    // clear PHPSESSID and reset it to something else 
    setcookie("PHPSESSID", "hackerlabs1112", time() + 3600, "/"); // Set cookie for 1 hour
    // Increment PHPSESSID by 1 if it is invalid
    if (isset($_COOKIE['PHPSESSID'])) {
        $session_id = $_COOKIE['PHPSESSID'];
        if (strpos($session_id, "hackerlabs") === 0) {
            $session_id = str_replace("hackerlabs", "", $session_id);
            $session_id = intval($session_id);
            $session_id++;
        } else {
            $session_id = 1111; // Initialize if the format is unexpected
        }
    } else {
        $session_id = 1111; // Initialize if the cookie is not set
    }
    
    setcookie("PHPSESSID", "hackerlabs".$session_id, time() + 3600, "/"); // Set cookie for 1 hour
    
    header("Location: /burp-suite-basics/session-highjacking.php?msg=Invalid username or password&type=error");
    exit;
}

?>
