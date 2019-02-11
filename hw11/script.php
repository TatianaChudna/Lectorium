<?php
//Task 1:Get form data from POST
var_dump($_POST);

//Task 2:Get name from email field
$emailArray = explode("@", $_POST["email"]);
var_dump($emailArray[0]);

//Task 3:Generate random password
$bytes = openssl_random_pseudo_bytes(5);
$pwd = bin2hex($bytes);
var_dump($pwd);