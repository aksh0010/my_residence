<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "my_residence";

    $conn = mysqli_connect($host, $user, $pwd, $db);
    // echo "hello";

    $username = $_POST['uname'];
    $userpwd = $_POST['psw'];



    $query = "SELECT * FROM student_login WHERE USERNAME='$username' AND PASSWORD = '$userpwd'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['my_residence'] = 'true';
        header("location:student_home.php");
    } else {

        echo "Wrong User name or password ! ";


        echo "<br><button> <a href='login_home.php'>Login Page</a> </button>";
    }
}
