<?php

$name = $_REQUEST['name'];
$sur = $_REQUEST['surname'];
$patr = $_REQUEST['patronymic'];
$log = $_REQUEST['login'];
$email = $_REQUEST['e-mail'];
$pass = $_REQUEST['password'];

$conn = new PDO('mysql:host=localhost;dbname=copy_star', "root", "");
$rows = $conn->query("INSERT INTO users VALUES= '.$name, .$sur, .$patr, .$log, .$emailh, ,$pass'");

if ($rows == false) {
    print("Данная учетная запись существует");
    header("Location: ../html/registr.html");
}
else header("Location: ../html/zagl.html");