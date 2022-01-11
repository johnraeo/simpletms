<?php
  session_start();

  if (isset($_SESSION["username"]) && isset($_SESSION["id"])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About | Project 1</title>

  <link href="../bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href="../css/about.css" rel="stylesheet" type="text/css">
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <!-- <img src="assets/png-branch.png" alt="" width="45" class="d-inline-block align-text-top"> -->
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Any1234</a>
        <div class="me-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">FAQs</a>
          </li> -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="pages/quotes.html">Quotes</a></li>
              <li><a class="dropdown-item" href="https:\\thinkandnoteb.herokuapp.com" target="_blank">Think and Note</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign up</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="../includes/logout.inc.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>

    <section class="section-1 d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            <div class="box-1">
              <h3>Hi from about page</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <script src="bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>

<?php
  }
  else {
    header("location: login.php");
  }
?>