<?php
// Include the database connection file
include 'test.php'; // Ensure 'test.php' has valid connection variables

session_start(); // Start session for managing user login

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from POST
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize inputs
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query to check user credentials
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Redirect based on user type
        if ($row["user_type"] == "1") {
            $_SESSION["username"] = $username;
            header("Location: admin.php");
        } elseif ($row["user_type"] == "2") {
            $_SESSION["username"] = $username;
            header("Location: user.php");
        }
        exit;
    } else {
        echo "<script>alert('Username or password incorrect'); window.location.href = 'index.php';</script>";
    }
}
?>
