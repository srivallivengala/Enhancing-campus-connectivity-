<?php
session_start();
$user = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://tse3.mm.bing.net/th?id=OIP.neMoV_sF2wamLIaJFhzF-AAAAA&pid=Api&P=0&h=180" type="image/jpeg">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>File Upload</title>
    
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
        }
        .cont {
            margin: 0 auto;
              border: 1px solid black;
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
/*            font-weight: bold;*/
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
        .upload h1 {
            text-align: center;
            color: #ffddca;
            margin-top: 120px;
        }

        form {
            max-width: 320px;
            margin: 20px auto;
            background-color: #fff;
            padding: 40px 20px;
            border: 1px solid #FFF;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #FFF;
            font-weight: bold;
        }

        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #ff7f00;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #e66400;
        }

        @media screen and (max-width: 600px) {
            form {
                padding: 20px 10px;
            }
        }

        /*body {
            background: linear-gradient(rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.5)), url("https://www.shutterstock.com/image-photo/abstract-blurred-empty-college-library-600nw-1162616722.jpg");
            background-size: cover;
            background-position: center;
        }

        .navbar img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
*/
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

         .footer .box-container .box a:hover{
            text-decoration: underline;
            color: #696969;
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
        }
         @media screen and (max-width: 600px) {
            p {
                padding: 0 10px;
            }
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
<body>
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
</div> <br>
<div class="upload">
    <h1>Upload Files</h1>
</div>
    <form class="bg-dark text-light" action="#upload" method="post" enctype="multipart/form-data">
<label for="year">Year:</label>
<select name="year" id="year">
    <option value="1st" selected>1st Year</option>
    <option value="2nd">2nd Year</option>
    <option value="3rd">3rd Year</option>
    <option value="4th">4th Year</option>
</select><br><br>

<label for="department">Department:</label>
<select name="department" id="department">
    <option value="CSE" selected>Computer Science and Engineering</option>
    <option value="ECE">Electronics and Communication Engineering</option>
    <option value="IT">Information Technology</option>
    <option value="CIVIL">Civil Engineering</option>
    <option value="MECH">Mechanical Engineering</option>
    <option value="EEE">Electrical and Electronics Engineering</option>
</select><br><br>

<label for="course">Course:</label>
<select name="course" id="course">
    <?php
    $courses = [
    '1st' => [
        'CSE' => ['Introduction to Programming', 'Data Structures', 'Algorithms'],
        'ECE' => ['Digital Electronics', 'Signal Processing', 'Communication Systems'],
        'IT' => ['Information Technology Fundamentals', 'Web Development Basics', 'Computer Organization'],
        'CIVIL' => ['Engineering Mechanics', 'Surveying', 'Construction Materials'],
        'MECH' => ['Engineering Drawing', 'Thermodynamics', 'Mechanics of Solids'],
        'EEE' => ['Electrical Circuits', 'Electromagnetic Fields', 'Power Systems'],
    ],
    '2nd' => [
        'CSE' => ['Advanced Data Structures', 'Database Management Systems', 'Computer Networks'],
        'ECE' => ['Microprocessors and Microcontrollers', 'Embedded Systems', 'VLSI Design'],
        'IT' => ['Object-Oriented Programming', 'Database Systems', 'Network Security'],
        'CIVIL' => ['Structural Analysis', 'Geotechnical Engineering', 'Fluid Mechanics'],
        'MECH' => ['Manufacturing Processes', 'Machine Design', 'Fluid Power Engineering'],
        'EEE' => ['Power Electronics', 'Electrical Machines', 'Control Systems'],
    ],
    '3rd' => [
        'CSE' => ['Operating Systems', 'Software Engineering', 'Machine Learning'],
        'ECE' => ['Wireless Communication', 'Digital Signal Processing', 'Embedded Systems Design'],
        'IT' => ['Data Mining', 'Software Testing', 'Mobile Application Development'],
        'CIVIL' => ['Transportation Engineering', 'Environmental Engineering', 'Structural Design'],
        'MECH' => ['Heat Transfer', 'Dynamics of Machinery', 'Automobile Engineering'],
        'EEE' => ['Renewable Energy Systems', 'Power System Protection', 'Digital Control Systems'],
    ],
    '4th' => [
        'CSE' => ['Artificial Intelligence', 'Big Data Analytics', 'Cloud Computing'],
        'ECE' => ['Internet of Things', 'Image Processing', 'Robotics'],
        'IT' => ['Cloud Security', 'Information Retrieval', 'Blockchain Technology'],
        'CIVIL' => ['Construction Management', 'Earthquake Engineering', 'Remote Sensing'],
        'MECH' => ['Finite Element Analysis', 'Robotics and Automation', 'Advanced Materials'],
        'EEE' => ['Smart Grids', 'Renewable Energy Integration', 'Electric Drives'],
    ],
];

    // Default to 1st year, CSE courses
    $selected_year = '1st';
    $selected_department = 'CSE';
    $selected_courses = $courses[$selected_year][$selected_department];

    foreach ($selected_courses as $course) {
        echo "<option value='$course'>$course</option>";
    }
    ?>
</select><br><br>

        <label for="file">Choose File:</label>
        <input type="file" name="file" id="file" required><br><br>

        <input id="upload" type="submit" name="submit" value="Upload File">
    </form>

   <?php
    // Handle file upload
include_once('db_connect.php');
if(isset($_POST['submit'])){
    $year = $_POST['year'];
    $department = $_POST['department'];
    $course = $_POST['course'];
    $file = $_FILES['file'];

    // Construct file path
    $filePath = "Project/$year/$department/$course/files/" . basename($file['name']);
    $uploader_name = $user; // Placeholder, replace with actual user data (e.g., session user)
    // Move uploaded file to the destination folder
    if(move_uploaded_file($file['tmp_name'], $filePath)){
        // Insert upload details into database
        $filename = basename($file['name']);
        $sql = "INSERT INTO uploads (uploader_name, year, department, course, filename) 
                VALUES ('$uploader_name', '$year', '$department', '$course', '$filename')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='text-align: center; color: #4CAF50;'>File uploaded successfully.</p>";
        } else {
            echo "<p style='text-align: center; color: #f44336;'>Failed to upload file: " . $conn->error . "</p>";
        }
    } else {
        echo "<p style='text-align: center; color: #f44336;'>Failed to upload file.</p>";
    }
}
?>
       <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>More links</h3>
                <a href="http://kucet.ac.in/college"><i class="fas fa-globe"></i> KU Official site</a>
                <a href="http://kucet.ac.in/syllabus/"><i class="fas fa-poll"></i> KU syllabus</a>
                <a href="https://technology.ku.edu/tech-support-students"><i class="fas fa-question-circle"></i> KU Help desk</a>
            </div>
            <div class="box">
                <h3>Locations</h3>
                <a href="#"><i class="fas fa-map-marker-alt"></i> Hanmakonda</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> Kottagudam</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> Telangana</a>
            </div>
            <div class="box w-100">
                <h3>Contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> 9603636883 / 7989865918</a>
                <a href=""><i class="fas fa-envelope"></i> placement.kucet@gmail.com</a>
                <a style="font-size: 16px;" href="#"><i class="fas fa-map-marker-alt"></i> Hanmakonda-Telangana</a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

// Function to update courses based on selected year and department
function updateCourses() {
    var year = document.getElementById('year').value;
    var department = document.getElementById('department').value;
    var courses = <?php echo json_encode($courses); ?>;

    var selectedCourses = courses[year][department];
    var courseSelect = document.getElementById('course');
    courseSelect.innerHTML = '';

    // Loop through courses and populate the select element
    selectedCourses.forEach(function(course) {
        var option = document.createElement('option');
        option.value = course;
        option.textContent = course;
        courseSelect.appendChild(option);
    });

    // Store selected options in localStorage
    localStorage.setItem('selectedYear', year);
    localStorage.setItem('selectedDepartment', department);
}

// Function to retrieve selected options from localStorage and update the form
function retrieveSelectedOptions() {
    var selectedYear = localStorage.getItem('selectedYear');
    var selectedDepartment = localStorage.getItem('selectedDepartment');

    // If localStorage is empty, set default values to 1st year and CSE
    if (!selectedYear || !selectedDepartment) {
        selectedYear = '1st';
        selectedDepartment = 'CSE';
    }

    document.getElementById('year').value = selectedYear;
    document.getElementById('department').value = selectedDepartment;

    // Update courses based on selected options
    updateCourses();
}

// Call function to retrieve selected options on page load
retrieveSelectedOptions();

// Add event listeners to year and department selects
document.getElementById('year').addEventListener('change', updateCourses);
document.getElementById('department').addEventListener('change', updateCourses);

        function logout() {         
                window.location.href = 'logout.php';       
        }    

        // Attach logout function to logout link
        document.getElementById("logoutLink").addEventListener("click", logout);

    </script>
</body>

</html>