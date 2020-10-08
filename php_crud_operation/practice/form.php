<?php

//var_dump($_SERVER['REQUEST_METHOD']);

// echo $_GET['name']."<br>";
// echo $_GET['password']."<br>";
// echo $_GET['email']."<br>";

// echo $_POST['name']."<br>";
// echo $_POST["password"]."<br>";

//var_dump($_SERVER);

var_dump($_GET);

$filter=filter_input(INPUT_GET, "email", FILTER_SANITIZE_STRING);

echo $filter;