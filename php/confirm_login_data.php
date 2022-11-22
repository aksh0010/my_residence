<?php
    print_r($_POST);
    //takes the data from login_home.html and inserts into the mySQL database 
    
    $username = $_POST['usernameStudent'];
    $password = $_POST['passwordStudent'];

    $username2 = $_POST['usernameFaculty'];
    $password2 = $_POST['passwordFaculty'];
    
    $username3 = $_POST['usernameAdmin'];
    $password3 = $_POST['passwordAdmin'];

    if(!empty($username3) || !empty($password3)){
        include 'dbconfig.php';
        $select = "SELECT usernameStudent, passwordStudent FROM student WHERE usernameStudent = ? AND passwordStudent = ?";
        $insert = "INSERT INTO student (usernameStudent, passwordStudent) VALUES (?, ?)";

        $stmt = $conn->prepare($select);
        $stmt->bind_param("ss", $username1, $password1);
        $stmt->execute();
        $stmt->bind_result($username1, $password1);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if($rnum == 0){
            $stmt->close();
            $stmt = $conn->prepare($insert);
            $stmt->bind_param("ss", $username1, $password1);
            $stmt->execute();
            echo "New record inserted sucessfully";
        }else{
            echo "Someone already registered using this username";
        }
        $stmt->close();
        $conn->close();
    }else{
        echo "All fields are required";
        die();
    }
    /*
    //function that gets login data from form in login_home.html for student login to enter student page
    if(isset($_POST[usernameStudent] && $_POST[passwordStudent])){
        include 'dbconfig.php';
        $username = $_POST[usernameStudent];
        $password = $_POST[passwordStudent];
        $sql = "SELECT * FROM student WHERE std_id = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "Login Successful";
        }else{
            echo "Login Failed";
        }
    }
    //function that gets login data from login_home.html for admin login to enter admin page 
    if(isset($_POST[usernameAdmin] && $_POST[passwordAdmin])){
        include 'dbconfig.php';
        $username = $_POST[usernameAdmin];
        $password = $_POST[passwordAdmin];
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "Login Successful";
        }else{
            echo "Login Failed";
        }
    }
    //function that gets login data from login_home.html for admin login to enter faculty page
    if(isset($_POST[usernameFaculty] && $_POST[passwordFaculty])){
        include 'dbconfig.php';
        $username = $_POST[usernameFaculty];
        $password = $_POST[passwordFaculty];
        $sql = "SELECT * FROM faculty WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "Login Successful";
            //now go to faculty page
        }else{
            echo "Login Failed";
            //stay on login page and display error message that login failed
        }
    }
    //function that adds signup data from signup_home.html to database  */
?>