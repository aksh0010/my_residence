<?php
$insert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $user = "patel4d1_My_residence";
    $pwd = "12345";
    $db = "patel4d1_My_residence";

    $conn = mysqli_connect($host, $user, $pwd, $db);
    
    $adv_id = $_POST['advisor_id'];
    // $query1 = "DELETE FROM STUDENT_ADVISOR WHERE advisor_id = ".$adv_id .";";
    $query1 = "DELETE FROM `STUDENT_ADVISOR` WHERE advisor_id =" . $adv_id . " ;";
    
    if ($conn->query($query1) == true) {
       
        $insert = true;
        echo "<br> Row successfully deleted from Database";
        echo "<html> <br><br><a href=" . "admin_home.php" . "> Go Back to home </a></html> ";
    } else {

        echo "<br> Unsuccessfull to delete row :(";
        echo "<html> <br><br><a href=" . "admin_home.php" . "> Go Back to home</a></html> ";
        echo "<br> $query <br> <br> $conn->error";
    }
    $conn->close();
}
