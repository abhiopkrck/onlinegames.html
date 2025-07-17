<?php
include 'connection.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sss", $username, $password, $role);
        if ($stmt->execute()) {
            $message = "Registration successful. <a href='login.php'>Login now</a>";
        } else {
            $message = "Registration failed: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $message = "Database error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - Clinic Management System</title>
<style>body {
    font-family: Arial, sans-serif;
    background-color: #f4f6f8;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.form-container {
    background-color: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    width: 350px;
}

.form-container h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-container label {
    display: block;
    margin-bottom: 5px;
    margin-top: 15px;
    font-weight: bold;
}

.form-container input[type="text"],
.form-container input[type="password"],
.form-container select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

.form-container input[type="submit"] {
    margin-top: 20px;
    width: 100%;
    background-color: #1e90ff;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 6px;
    cursor: pointer;
}

.form-container input[type="submit"]:hover {
    background-color: #0d6efd;
}

.message {
    color: green;
    font-size: 14px;
    text-align: center;
}
</style>
</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <?php if (!empty($message)) echo "<p class='message'>$message</p>"; ?>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="role">Role:</label>
            <select name="role" required>
                <option value="admin">Admin</option>
                <option value="receptionist">Receptionist</option>
                <option value="doctor">Doctor</option>
            </select>

            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
