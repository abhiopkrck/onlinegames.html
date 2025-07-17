<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logging Out</title>
    <link rel="stylesheet" href="form.css"> <!-- Link your CSS file -->
    <meta http-equiv="refresh" content="2;url=login.php"> <!-- Auto redirect after 2 seconds -->
</head>
<body>
    <div class="container">
        <h2>You have been logged out.</h2>
        <p>Redirecting to login page...</p>
    </div>
</body>
</html>
