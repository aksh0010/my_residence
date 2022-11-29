<?php
$insert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $user = "patel4d1_My_residence";
    $pwd = "12345";
    $db = "patel4d1_My_residence";

    $conn = mysqli_connect($host, $user, $pwd, $db);

    $std_id = $_POST['std_id'];

    $query1 = "DELETE FROM STUDENT WHERE std_id = ".$std_id.";";

    if ($conn->query($query1) == true) {

        $insert = true;
        echo "<br> Row successfully deleted from Database";
        echo "<html> <br><br><a href=" . "admin_home.php" . "> Go Back</a></html> ";
    } else {


        echo "<br> Unsuccessfull to delete row :(";
        echo "<html> <br><br><a href=" . "admin_home.php" . "> Go Back</a></html> ";
        echo "<br> <br> <br> $conn->error";
    }
    $conn->close();
}
