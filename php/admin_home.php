<?php
session_start();
if (!$_SESSION['patel4d1_My_residence']) {
    header('location:login_page.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  /* Full-width input fields */
  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
    background-color: #000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }


  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
    padding-top: 60px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%;
    /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
  }

  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
  }

  @-webkit-keyframes animatezoom {
    from {
      -webkit-transform: scale(0);
    }

    to {
      -webkit-transform: scale(1);
    }
  }

  @keyframes animatezoom {
    from {
      transform: scale(0);
    }

    to {
      transform: scale(1);
    }
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }

    .cancelbtn {
      width: 100%;
    }
  }

  .body-bg {
    background-image: url("./img/img1.jpg");
    padding: 5px;
    /* border: 2px solid black; */
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
  }
</style>
<body>
    <!-- !!  My Residence Login  -->
  <div class="list-group ">
    <br><br>
    <h1 style="text-align: center">Welcome Admin</h1>
    <br><br>
    <!-- !!  add above this text-bg-warning p-3 to make it yellow -->
    
    <!-- !!  Advisor Login  -->
    <a href="#" class="list-group-item list-group-item-action"><button onclick="document.getElementById('id01').style.display='block'" style="width: auto">
        Advisor
      </button>

      <div id="id01" class="modal">
        <form class="modal-content animate" action="./admin_advisor.php" method="POST">
     
          <div class="container">
            <label for="uname"><b>Advisor ID</b></label>
            <input type="text" placeholder="Enter Advisor ID" name="id" required />
     
            <button type="submit">Go</button>            
          </div>

          <div class="container" style="background-color: #f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
              Cancel
            </button>
            <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
          </div>
        </form>
      </div>

      <script>
        // Get the modal
        var modal = document.getElementById("id01");

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        };
      </script>
    </a>
    <!-- !!  Student Login  -->
    <a href="#" class="list-group-item list-group-item-action"><button onclick="document.getElementById('id02').style.display='block'" style="width: auto">
        Student
      </button>

      <div id="id02" class="modal">
        <form class="modal-content animate" action="./admin_student.php" method="POST">


          <div class="container">
          <label for="uname"><b>Student ID</b></label>
            <input type="text" placeholder="Enter Student Id" name="std_id" required />
           
            <button type="submit">Go</button>
          
          </div>

          <div class="container" style="background-color: #f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">
              Cancel
            </button>
            <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
          </div>
        </form>
      </div>

      <script>
        // Get the modal
        var modal = document.getElementById("id02");

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        };
      </script>
    </a>
    <a href="#" class="list-group-item list-group-item-action"><button onclick="document.getElementById('id03').style.display='block'" style="width: auto">
        <!-- !!  Staff Login  -->
        Staff
      </button>

      <div id="id03" class="modal">
        <form class="modal-content animate" action="./admin_staff.php" method="POST">
         

          <div class="container">
          <label for="uname"><b>Staff ID</b></label>
            <input type="text" placeholder="Enter Staff Id" name="staff_num" required />
           
            <button type="submit">Go</button>
           
          </div>

          <div class="container" style="background-color: #f1f1f1">
            <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">
              Cancel
            </button>
            <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
          </div>
        </form>
      </div>

      <script>
        // Get the modal
        var modal = document.getElementById("id03");

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        };
      </script>
    </a>
    <!-- !! Back to home page  -->
   
  </div>
  </div>

<br>
    <button class="btn btn-warning" style="text-decoration:none"> <a href="logout.php">Log out</a> </button>
</body>

</html>