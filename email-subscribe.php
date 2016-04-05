<?php
include('functions.php');

$email = $_GET["email"];
$email = clean_input($email);

$response = subscribe($email);

echo $response;
