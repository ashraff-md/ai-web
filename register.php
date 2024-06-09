<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png" />
  <link rel="manifest" href="img/fav/site.webmanifest" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      margin-bottom: 0;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-left: 2%;
      margin-right: 2%;
    }

    .social-icons a {
      color: #fff;
      font-size: 1.5rem;
      margin: 0 5px;
    }

    .footer-content p {
      margin: 0;
      display: flex;
      align-items: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href><img src="img/fav/favicon-32x32.png" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="login.php">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container-md mt-5 mb-5 p-3 bg-light text-dark rounded" style="max-width: 500px">
    <h2 class="fw-normal">Create a Web Hive Account</h2>
    <form action="dbregister.php" method="post" class="row g-3">
      <div class="col-md-6">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstName" required>
      </div>

      <div class="col-md-6">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastName" required>
      </div>
      <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password" required>
      </div>
      <div class="col-md-6">
        <label for="confirmPassword4" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword4" name="confirmPassword" required>
      </div>
      <div class="col-md-6">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dateOfBirth" required>
      </div>
      <div class="col-md-6">
        <label for="gender" class="form-label">Gender</label>
        <select id="gender" name="gender" class="form-select" required>
          <option value="m">Male</option>
          <option value="f">Female</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputPhone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="inputPhone" name="phone" required>
      </div>
      <div class="col-md-6">
        <label for="inputPhone" class="form-label">Salary</label>
        <input type="text" class="form-control" id="inputPhone" name="salary" required>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">Regiter</button>
      </div>
    </form>

    <?php
    if (isset($_GET['error'])) {
      echo('
      <div class="alert alert-danger mt-3" role="alert">
      User Already Exists!
      </div>
      ');
    }
    ?>
  </div>
  
  <footer>
    <div class="footer-content">
      <p class="copyright">&copy; 2024 Web Hive. All Rights Reserved.</p>
      <div class="social-icons">
        <a href="https://www.linkedin.com/in/ashraff-md/" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/trexsolutions.co" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100008607992961" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://wa.me/94767986810" target="_blank"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
  </footer>


  <script>
      function hideAlertBox() {
        const alertBox = document.getElementById("alertbox");
        alertBox.style.display = "none";
      }
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>