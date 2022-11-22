<?php 
session_start();
if(!$_SESSION['my_residence']){
    header('location:login_home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home</title>
</head>
<body>
    Welcome admin


    <button> <a href="logout.php">Log out</a> </button>
</body>
</html>