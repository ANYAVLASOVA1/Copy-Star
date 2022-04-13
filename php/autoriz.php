<?php

$log = $_REQUEST['login'];
$pass = $_REQUEST['password'];

$conn = new PDO('mysql:host=localhost;dbname=copy_star', "root", "");
$rows = $conn->query("SELECT * FROM users WHERE login='".$log."'")->fetch();
if($log == $rows['login'] && $pass == $rows['password'])
{
    session_start();
    $_SESSION['name'] = $log;
    if ($log == 'admin' && $pass == 'admin11')
    {
        header("location: ../html/admin_panel.html");
    }
    else
    {
       header("location: ../html/zagl.html"); 
    }
} 
else 
{
    header("location: ../");
}