<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["user"];?></h1>
    <a href="logout.php">Sign out</a>
</body>
</html>