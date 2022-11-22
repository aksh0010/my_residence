<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Home</title>
  <!-- css Bundle with Popper  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
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
    background-color: #04aa6d;
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

  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  img.avatar {
    width: 40%;
    border-radius: 50%;
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
  .container {
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
      padding: 10px;
      margin-top: 30px;
      background-color: #04aa6d;
      margin-bottom: 30px;
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
    /* border: 2px solid black; */
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
  }
  .footer-basic {
      margin-top: 30px;
      padding:40px 0;
      background-color:#17735a;
    }

    .footer-basic ul {
      color:000000;
      padding:0;
      list-style:none;
      text-align:center;
      font-size:18px;
      line-height:1.6;
      margin-bottom:0;
    }

    .footer-basic li {
      color:000000;
      padding:0 10px;
    }

    .footer-basic ul a {
      color:000000;
      text-decoration:none;
      opacity:0.8;
    }

    .footer-basic ul a:hover {
      opacity:1;
      color:000000;
    }

    .footer-basic .social {
      text-align:center;
      padding-bottom:25px;
      color:000000;
    }

    .footer-basic .social > a {
      font-size:24px;
      width:40px;
      height:40px;
      line-height:40px;
      display:inline-block;
      text-align:center;
      border-radius:50%;
      border:1px solid #ccc;
      margin:0 8px;
      color:000000;
      opacity:0.75;
    }

    .footer-basic .social > a:hover {
      opacity:0.9;
      color:000000;
    }

    .footer-basic .copyright {
      margin-top:15px;
      text-align:center;
      font-size:13px;
      margin-bottom:0;
      color:000000;
    }

    .text-center{
      padding:15px;
    }
    .text-center2{
      padding:15px;
      font-style: italic;
      font-size: 20px;
      text-align:center;
    }
    .img-fluid{
      size: 120%;
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 65%;
      border: 2px solid black;
      border-radius:47%;
    }
    .navbar-custom{
      background-color: #17735a;
    }
</style>

<body class="body-bg">
  <!-- !! Div for navigation bar -->
  <div>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">My Residence</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="./index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./login_page.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about_us.html">About us </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- !!  Div for the rest of the content  -->
  <!-- !!  My Residence Login  -->
  <div class= "container">
    <div class="list-group ">
      <br><br>
      <h1 style="text-align: center">Login to your MyResidence Account</h1>
      <br><br>
      <!-- !!  add above this text-bg-warning p-3 to make it yellow -->
      <a href="./login_page.php" class="list-group-item list-group-item-action" style="background-color: #6082B6;" aria-current="true">
        My Residence Login
      </a>
      <!-- !!  Admin Login  -->
      <a href="#" class="list-group-item list-group-item-action"><button onclick="document.getElementById('id01').style.display='block'" style="width: auto">
          Admin
        </button>

        <div id="id01" class="modal">
          <form class="modal-content animate" action="./admin_auth.php" method="POST">
            <!-- action="/admin_login.php" -->
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="./img/admin.png" alt="Avatar" class="avatar" />
            </div>

            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required />

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required />

              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember" />
                Remember me
              </label>
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
          <form class="modal-content animate" action="./student_auth.php" method="POST">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="./img/student.png" alt="Avatar" class="avatar" />
            </div>

            <div class="container">
            <label for="uname"><b>Student ID</b></label>
              <input type="text" placeholder="Enter Student Id" name="std_id" required />
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required />

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required />

              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember" />
                Remember me
              </label>
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
          <form class="modal-content animate" action="./staff_auth.php" method="POST">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="./img/staff.png" alt="Avatar" class="avatar" />
            </div>

            <div class="container">
            <label for="uname"><b>Staff ID</b></label>
              <input type="text" placeholder="Enter Staff Id" name="staff_num" required />
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required />

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required />

              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember" />
                Remember me
              </label>
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
  <footer class="footer-basic">
      <div class="social">
        <a href="#" style="color:black;"><i class="icon ion-social-instagram" style="color:black;"></i></a>
        <a href="#" style="color:black;"><i class="icon ion-social-snapchat" style="color:black;"></i></a>
        <a href="#" style="color:black;"><i class="icon ion-social-twitter" style="color:black;"></i></a>
        <a href="#" style="color:black;"><i class="icon ion-social-facebook" style="color:black;"></i></a>
      </div>
      <div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="./index.php" style="color:black;">Home</a></li>
            <li class="list-inline-item"><a href="#" style="color:black;">Services</a></li>
            <li class="list-inline-item"><a href="./about_us.html" style="color:black;">About</a></li>
            <li class="list-inline-item"><a href="#" style="color:black;">Terms</a></li>
            <li class="list-inline-item"><a href="#" style="color:black;">Privacy Policy</a></li>
        </ul>
      </div>
      <div>
        <p class="copyright">MyResidence © 2018</p>
      </div>
    </footer>
</body>

</html>