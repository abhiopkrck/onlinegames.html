<?php
// Start session and include DB
session_start();
include '../db.php';

// BOOK Appointment
if (isset($_POST['book_appointment'])) {
    $patient_id = $_POST['patient_id'];
    $doctor_name = $_POST['doctor_name'];
    $appointment_date = $_POST['appointment_date'];

    $sql = "INSERT INTO appointments (patient_id, doctor_name, appointment_date, status) 
            VALUES ('$patient_id', '$doctor_name', '$appointment_date', 'Scheduled')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Appointment booked successfully!";
    } else {
        $_SESSION['error'] = "Error booking appointment: " . mysqli_error($conn);
    }
    header("Location: ../appointments/book_appointment.php");
    exit();
}

// CANCEL Appointment
if (isset($_GET['cancel'])) {
    $id = $_GET['cancel'];
    $sql = "UPDATE appointments SET status='Cancelled' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Appointment cancelled successfully!";
    } else {
        $_SESSION['error'] = "Error cancelling appointment: " . mysqli_error($conn);
    }
    header("Location: ../appointments/view_appointments.php");
    exit();
}

// RESCHEDULE Appointment
if (isset($_POST['reschedule_appointment'])) {
    $id = $_POST['appointment_id'];
    $new_date = $_POST['new_date'];

    $sql = "UPDATE appointments SET appointment_date='$new_date' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Appointment rescheduled successfully!";
    } else {
        $_SESSION['error'] = "Error rescheduling appointment: " . mysqli_error($conn);
    }
    header("Location: ../appointments/view_appointments.php");
    exit();
}
?>
