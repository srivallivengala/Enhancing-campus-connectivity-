<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUCET</title>
    <link rel="icon" href="https://tse3.mm.bing.net/th?id=OIP.neMoV_sF2wamLIaJFhzF-AAAAA&pid=Api&P=0&h=180" type="image/jpeg">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.5.1/viewer.min.css">

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

        .table {
            background-color: #333;
            color: #FFF;
        }

        .table th,
        .table td {
            border-color: #555;
        }
       /* .navbar img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }*/

       .footer {
            background-color: #353839;
            color: #fff;
            padding: 5px 0;
            text-align: center;
        }

        .footer .box-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .footer .box {
            flex: 1;
            padding: 5px;
        }

        .footer .box h3 {
            margin-bottom: 10px;
        }

        .footer .box a {
            display: block;
            color: #fff;
            text-decoration: none;
            margin-bottom: 5px;
        }
 @media (max-width: 768px) {
            .menu ul li {
                display: block;
                margin-bottom: 10px;
            }

            .content button {
                margin-top: 10px;
                margin-right: 5px;
            }

            .footer .box {
                flex: none;
                width: 90%;
            }
           /* .content  img {
                object-fit: contain;
            }
*/
        }
        .footer .box-container .box a:hover{
            text-decoration: underline;
            color: #696969;
        }

        @media (min-width: 800px) {
            form {
                max-width: 600px;
            }
        }

.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    color: #fff;
    backdrop-filter: blur(90px);
    background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
    z-index: 9999; /* Ensure it appears on top of other elements */
}

.popup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    border: 2px solid skyblue;
    transform: translate(-50%, -50%);
    background-color: #867447;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    text-align: center;
    width: 80%;
}

.popup-content p {
    margin-bottom: 4px;
}

.uh {
margin-top: 80px;
 color: #ffddca;
}

i {
margin-right: 5px;
}
 .navb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://www.shutterstock.com/image-photo/abstract-blurred-empty-college-library-600nw-1162616722.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
        }
    </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="body">
    <div id="popup" class="popup">
        <div class="popup-content">
            <p>Access not allowed without login.</p>
            <p>Redirecting to homepage...</p>
        </div>
    </div>

    <script>
        var userType = localStorage.getItem('u-type');

        // If userType is neither "admin" nor "users", display the popup box and redirect after a delay
        if (userType !== "admin") {
            var popup = document.getElementById('popup');
            popup.style.display = 'block';

            // Redirect after a delay
            setTimeout(function() {
                window.location.href = "index.html";
            }, 3500); // Redirect after 5 seconds (5000 milliseconds)
        }
    </script>
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
          <a class="nav-link" href="courses.php">Courses</a>
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
</div> <br><br><br>
<center><h1 class="mb-4 uh" >Upload History</h1></center>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Uploader</th>
                    <th>Year</th>
                    <th>Department</th>
                    <th>Course</th>
                    <th>Filename</th>
                    <th>Upload Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection settings
                include_once('db_connect.php');

                // Fetch upload history from database
                $sql = "SELECT * FROM uploads ORDER BY upload_timestamp DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $count = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$count}</td>";
                        echo "<td>{$row['uploader_name']}</td>";
                        echo "<td>{$row['year']}</td>";
                        echo "<td>{$row['department']}</td>";
                        echo "<td>{$row['course']}</td>";
                        echo "<td>{$row['filename']}</td>";
                        echo "<td>{$row['upload_timestamp']}</td>";
                        echo "</tr>";
                        $count++;
                    }
                } else {
                    echo "<tr><td colspan='7'>No uploads found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<!-- <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>More links</h3>
            <a href="#"><i class="fas fa-globe"></i>KU Official site</a>
            <a href="#"><i class="fas fa-poll"></i>KU results</a>
            <a href="#"><i class="fas fa-question-circle"></i>KU Help desk</a>
        </div>
        <div class="box">
            <h3>Locations</h3>
            <a href="#"><i class="fas fa-map-marker-alt"></i> Hanmakonda</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> Kottagudam</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> Telangana</a>
        </div>
        <div class="box w-100">
            <h3>Contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +91-xxxxxxxxxx</a>
            <a href="#"><i class="fas fa-envelope"></i> abc@gmail.com</a>
            <a style="font-size: 16px;" href="#"><i class="fas fa-map-marker-alt"></i>Hanmakonda-Telangana</a>
        </div>
    </div>
</section> -->
    <!-- Bootstrap JS (optional if you need JS features) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
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

        // Attach logout function to logout link
        document.getElementById("logoutLink").addEventListener("click", logout);
</script>
</body>

</html>