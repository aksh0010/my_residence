<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home 1</title>

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
    .body-bg {
      background-image: url("./img/img1.jpg");
      padding: 5px;
      /* border: 2px solid black; */
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100%;
    }
  </style>

  <body class="body-bg">
    <div>
      <!-- !! Div for navigation bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <a class="nav-link" href="#">About us </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- !! Div for rest content  -->
    <div></div>
  </body>
</html>