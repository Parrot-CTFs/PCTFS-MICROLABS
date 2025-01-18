<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'admin' && $password == 'admin'){
    header('Location: /burp-suite-basics/brute-forcing-login.php?msg=Login Successfull');
}else{
    header('Location: /burp-suite-basics/brute-forcing-login.php?msg=Login Failed');
}

?>