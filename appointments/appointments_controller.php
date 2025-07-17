<?php
// Database connection
include('../config/db.php');

// ADD Appointment
if (isset($_POST['add_appointment'])) {
    $patient_id = $_POST['patient_id'];
    $doctor_name = $_POST['doctor_name'];
    $appointment_date = $_POST['appointment_date'];
    $status = $_POST['status'];

    $query = "INSERT INTO appointments (patient_id, doctor_name, appointment_date, status)
              VALUES ('$patient_id', '$doctor_name', '$appointment_date', '$status')";

    if (mysqli_query($conn, $query)) {
        header("Location: appointments_list.php?success=added");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// UPDATE Appointment
if (isset($_POST['update_appointment'])) {
    $id = $_POST['id'];
    $patient_id = $_POST['patient_id'];
    $doctor_name = $_POST['doctor_name'];
    $appointment_date = $_POST['appointment_date'];
    $status = $_POST['status'];

    $query = "UPDATE appointments 
              SET patient_id = '$patient_id', 
                  doctor_name = '$doctor_name', 
                  appointment_date = '$appointment_date', 
                  status = '$status' 
              WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: appointments_list.php?success=updated");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// DELETE Appointment
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM appointments WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: appointments_list.php?success=deleted");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
