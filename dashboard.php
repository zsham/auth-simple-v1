<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h1>

    <!-- Logout button -->
    <form method="POST" action="logout.php">
        <button type="submit">Logout</button>
    </form>
</body>
</html>