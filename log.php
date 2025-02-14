<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once('db_connect.php');

    // Prepare SQL statement to fetch user data
    $sql = "SELECT username, password, role FROM faculty WHERE username = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Bind result variables
    $stmt->bind_result($dbUsername, $dbPassword, $dbRole);

    // Check if user exists and password is correct
    if ($stmt->num_rows > 0 && $stmt->fetch() && password_verify($password, $dbPassword)) {
        $_SESSION["username"] = $username;
        $_SESSION["u-type"] = "admin";
        $_SESSION["isLoggedIn"] = true; // Set isLoggedIn to true
        if ($dbRole == 'superadmin') {
            $_SESSION["role"] = "yes";
        } else {
            $_SESSION["role"] = "no";
        }
        echo "success";
    } else {
        echo "Invalid username or password."; // Return error message
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>