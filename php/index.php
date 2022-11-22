<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <!-- JavaScript Bundle with Popper  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </head>
  <style>
    /*make navbar a diffrent color*/
    .container {
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
      padding: 10px;
      margin-top: 30px;
      background-color: #04aa6d;
      margin-bottom: 30px;
    }
    /*container that extends other container with a diffretn background color*/
    .container2 {
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
      padding: 10px;
      margin-left: 50px;
      margin-right: 50px;
      background-color: #17735a;
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
    <!-- !! Div for rest content  -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">Welcome to My Residence</h1>
          <h3 class="text-center2">"Your Home Away From Home"</h3>
        </div>
      </div>
    </div>
    <!-- !!content for home page of university residence page  -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">What we Provide</h1>
          <p class="text-center">
            We provide a safe and secure environment for students to live in
            while attending university. We have a variety of rooms to choose from
            and a variety of amenities to choose from. We have rooms on campus in our main residence buildings aswell 
            as off campus in our off campus residence buildings. These of campus rooms are located in the downtown area 
            of the city but still within a good walking distnace from campus.
          </p>
        </div>
      </div>
    </div>
    <!-- !!pictues of some rooms for residence with some nice padding and borders around them vertical on the website with description boxes underneath each image-->
    <div class = "container">
        <h1 class="text-center">Some of our available rooms</h1>
        <div class = "row">
        <div class="col-sm-4">
          <div class = "container2">
            <img src="./img/room1.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <p class="text-center">Room in our main residence hall</p>
          
        </div>
        <div class="col-sm-4">
          <div class = "container2">
            <img src="./img/room2.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <p class="text-center">Room in secondary hall</p>
        </div>
        <div class="col-sm-4">
          <div class = "container2">
            <img src="./img/room3.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <p class="text-center">Room in our bad hall</p>
        </div>
      </div>
      </div>  
    </div>
    <!-- More information for the details about how the website works with the froms and querying the database  -->
    <div class = "container">
      <div class = "row">
        <div class="col-sm-12">
          <h1 class="text-center">How it works</h1>
          <p class="text-center">
            We have a database that stores all the information about the rooms
            and the students that live in them. We have a form that allows students 
            to search for a room based on the price of the room. It will search both 
            the student flats and dorm rooms avaialbe. A advisor can manage the 
            student that is assigned to them. They can add a student to their list aswell.
            As an admin can do many difftent DDL and DML commands to the database.
          </p>
        </div>
      </div>
    </div>
    <!-- !! Div for footer  -->  
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
