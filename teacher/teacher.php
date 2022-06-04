<?php
session_start();
if ($_SESSION['teacher_login_status'] != "logged in" and !isset($_SESSION['user_id']))
    header('Location:../sign.php');



if (isset($_GET['sign']) and $_GET['sign'] == "out") {
    $_SESSION['teacher_login_status'] = "logged out";
    unset($_SESSION['user_id']);
    header('Location:../sign.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teacher</h1>
</body>
</html>