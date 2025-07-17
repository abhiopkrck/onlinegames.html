<?php
// Patients controller.php
?><?php
$host = "localhost";
$user = "root";
$password = "";
$database = "clinic_management";

// Create DB connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add Patient
if (isset($_POST['add_patient'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $sql = "INSERT INTO patients (name, age, gender, contact, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisss", $name, $age, $gender, $contact, $address);
    $stmt->execute();

    header("Location: patients_list.php");
    exit();
}

// Edit Patient
if (isset($_POST['edit_patient'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $sql = "UPDATE patients SET name=?, age=?, gender=?, contact=?, address=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisssi", $name, $age, $gender, $contact, $address, $id);
    $stmt->execute();

    header("Location: patients_list.php");
    exit();
}

// Delete Patient
if (isset($_GET['delete_patient'])) {
    $id = $_GET['delete_patient'];

    $sql = "DELETE FROM patients WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: patients_list.php");
    exit();
}
?>
