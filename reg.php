<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Database connection details
    include_once('db_connect.php');

    // Check if username already exists
    $sql_check = "SELECT username FROM faculty WHERE username = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $username);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        echo "<p class='error-message'>Username already exists. Please choose a different username.</p>";
        echo "<script>setTimeout(function(){ window.location.href='reg.php'; }, 3000);</script>";
    } else {
        // Prepare SQL statement to insert user data
        $sql_insert = "INSERT INTO faculty (username, password) VALUES (?, ?)";

        // Prepare and bind parameters to prevent SQL injection
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("ss", $username, $hashedPassword);

        // Execute the statement
        if ($stmt_insert->execute()) {
            echo "<p class='success'>Registration successful. <a href='index.html'>Login</a></p>";
            echo "<script>setTimeout(function(){ window.location.href='index.html'; }, 3000);</script>";
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }

        // Close statement
        $stmt_insert->close();
    }

    // Close connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="https://tse3.mm.bing.net/th?id=OIP.neMoV_sF2wamLIaJFhzF-AAAAA&pid=Api&P=0&h=180" type="image/jpeg">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://tse1.mm.bing.net/th?id=OIP.L0fHj-mM9am5u2UlL18McQHaEK&pid=Api&P=0&h=180");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color: #fff;
            width: 100%;
            min-height: 100vh;
            -webkit-tap-highlight-color: transparent;
        }

        header{

            color: #841b2d;
             padding: 5px;
             text-align: center;
             width: 100%;
             background: linear-gradient(180deg, #d3d3d3,#696969);
/*             position: fixed;*/
/*             margin-bottom: 10px;*/
        }
        .cont {
/*            width: 90%;*/
            margin: 0 auto;
/*            padding: 10px;*/
              border: 1px solid black;
             /* position: fixed;
              width: 100%;
              margin-top: 9px;*/

        }
        .navb{
            position: fixed;
            width: 100%;
                
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0 10px 30px;
            color: black;
            font-weight: bold;
        }

        .navbar .logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        .navbar{
            background-color: gray;
            pading: 5px;
            font-size: 18px;
        }
         .container {
      max-width: 800px;
      margin: 100px auto 20px;
      background-color: #222;
      /* Dark background color */
      padding: 20px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
      /* Adjust shadow color */
    }

    .container h2 {
      color: #fff;
      margin-top: 10px;
      padding-bottom: 10px;
      border-bottom: 1px solid #aaa;
      /* Adjust border color */
    }

        /*.container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
        }
*/
        h2 {
            margin-top: 0;
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            background-color: #dc3545;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #c82333;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }

        .success {
            color: green;
            margin-top: 10px;
            text-align: center;
        }
        .navb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://www.shutterstock.com/image-photo/abstract-blurred-empty-college-library-600nw-1162616722.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="navb">
    <div class="cont">
    <nav class="navbar navbar-expand-lg navbar-light" >
  <div class="container-fluid">
     <a href="#" class="logo"><img src="https://tse3.mm.bing.net/th?id=OIP.neMoV_sF2wamLIaJFhzF-AAAAA&pid=Api&P=0&h=180" alt="Logo"></a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item" id="courses">
          <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item" id="uploadAble">
          <a class="nav-link" href="upload_files.php">Upload</a>
        </li>
        <li class="nav-item" id="reg">
          <a class="nav-link" href="reg.php">Register</a>
        </li>
        <li class="nav-item" id="delete">
            <a class="nav-link" href="delete_panel.php">Delete</a>
        </li>
        <li class="nav-item" id="history">
            <a class="nav-link" href="upload_history.php">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact us</a>
        </li>
        <li class="nav-item" id="login">
          <a class="nav-link" href="login.html">Login</a>
        </li>
        <li class="nav-item" id="logoutLink">
           <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<header>
        <h2>Kakatiya University College Of Engineering And Technology</h2>
    </header> 
 </div> <br><br><br><br><br><br>
    <div class="container">
        <h2>Register</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Register">
        </form>
    </div>
    <div id="error">
        <h2>You are not allowed to access this page</h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            if (localStorage.getItem('role') !== 'yes') {
                document.getElementById("reg").style.display = "none";
            } else {
                document.getElementById("error").style.display = "none";
            }
             if (localStorage.getItem('u-type') !== 'admin') {
            document.getElementById("uploadAble").style.display = "none";
        }
        if (localStorage.getItem('role') !== 'yes') {
            document.getElementById("reg").style.display = "none";
        }
         if (localStorage.getItem('role') !== 'yes') {
            document.getElementById("delete").style.display = "none";
        }
         if (localStorage.getItem('role') !== 'yes') {
            document.getElementById("history").style.display = "none";
        }
        if (localStorage.getItem('isLoggedIn') === 'true') {
            document.getElementById("login").style.display = "none";
        } else {
            document.getElementById("logoutLink").style.display = "none";
        }

        function logout() {
            window.location.href = 'logout.php';
        }

        function courses() {
            var userType = localStorage.getItem('u-type');

            // If userType is neither "admin" nor "users", show the alert and redirect
            if (userType !== "admin" && userType !== "users") {
                if (confirm("Access not allowed without login. Press OK to redirect to login page.")) {
                    window.location.href = "login.html";
                }
            } else {
                window.location.href = "courses.php"; // Redirect to courses page for logged-in users
            }

        }

        // Attach logout function to logout link
        document.getElementById("logoutLink").addEventListener("click", logout);
        document.getElementById("courses").addEventListener("click", courses);
        </script>
</body>
</html>