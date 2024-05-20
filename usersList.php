<?php
    session_start();
    if(!isset($_SESSION['adminloggedin'])) {
        header('Location: login.php');
        exit();
    }
?>



<!doctype html>
<html lang="en">

<head>
    <title>Employee Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .hero-text {
            text-align: center;
            color: #333;
            font-size: 5rem;
            margin-top: 10vh;
            font-weight: 100;
        }

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
                        <a class="nav-link" aria-current="page" href="register.php">Register</a>
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


    <div class="container">
        <h1 class="hero-text mb-4">Employee Table</h1>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the MySQL database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "aiphp";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // SQL query to select the desired columns from the "Employee" table
                $sql = "SELECT FirstName, LastName, Email, Salary, Phone, DateOfBirth, Password FROM Employee";

                // Execute the query
                $result = $conn->query($sql);

                // Check if the query was successful
                if ($result) {
                    // Fetch the rows
                    while ($row = $result->fetch_assoc()) {
                        // Display the data in table rows
                        echo "<tr>";
                        echo "<td class='p-3'>" . $row["FirstName"] . "</td>";
                        echo "<td class='p-3'>" . $row["LastName"] . "</td>";
                        echo "<td class='p-3'>" . $row["Email"] . "</td>";
                        echo "<td class='p-3'>" . $row["Salary"] . "</td>";
                        echo "<td class='p-3'>" . $row["Phone"] . "</td>";
                        echo "<td class='p-3'>" . $row["DateOfBirth"] . "</td>";
                        echo "<td class='p-3'>" . $row["Password"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>