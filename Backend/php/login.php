<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Authenticate the user here
    if ($username == "ashish" && $password == "ashish") {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid username or password";
    }
}
?>