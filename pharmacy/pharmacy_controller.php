<?php
include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['assign_medicine'])) {
        $patient_id = $_POST['patient_id'];
        $medicine_name = $_POST['medicine_name'];
        $quantity = $_POST['quantity'];
        $date_assigned = $_POST['date_assigned'];

        $stmt = $conn->prepare("INSERT INTO assigned_medicines (patient_id, medicine_name, quantity, date_assigned) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isis", $patient_id, $medicine_name, $quantity, $date_assigned);
        $stmt->execute();
        header("Location: ../pharmacy/assign_medicines.php?success=1");
        exit();
    }

    if (isset($_POST['generate_bill'])) {
        $patient_id = $_POST['patient_id'];
        $total_amount = $_POST['total_amount'];
        $bill_date = $_POST['bill_date'];

        $stmt = $conn->prepare("INSERT INTO medicine_bills (patient_id, total_amount, bill_date) VALUES (?, ?, ?)");
        $stmt->bind_param("ids", $patient_id, $total_amount, $bill_date);
        $stmt->execute();
        header("Location: ../pharmacy/generate_medicine_bill.php?success=1");
        exit();
    }

    // Add more functions as needed...
}
?>
