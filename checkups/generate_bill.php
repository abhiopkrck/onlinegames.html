<?php
include '../db.php';
session_start();

// Fetch patients
$patients = mysqli_query($conn, "SELECT id, name FROM patients");

// Handle form submit
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['generate_bill'])) {
    $patient_id = $_POST['patient_id'];
    $checkup_charges = $_POST['checkup_charges'];
    $medicine_charges = $_POST['medicine_charges'];
    $total_amount = $checkup_charges + $medicine_charges;
    $bill_date = date('Y-m-d');

    $insert = "INSERT INTO billing (patient_id, checkup_charges, medicine_charges, total_amount, bill_date)
               VALUES ('$patient_id', '$checkup_charges', '$medicine_charges', '$total_amount', '$bill_date')";

    if (mysqli_query($conn, $insert)) {
        $_SESSION['success'] = "Bill generated successfully!";
    } else {
        $_SESSION['error'] = "Error generating bill: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generate Bill</title>
    <style>
        body {
            background-color: #121212;
            font-family: Arial, sans-serif;
            color: #f0f0f0;
            padding: 40px;
        }
        .container {
            max-width: 600px;
            background: #1e1e1e;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #444;
            margin: auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #00adb5;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 5px;
            border: 1px solid #555;
            background: #2c2c2c;
            color: #fff;
        }
        input[type="submit"] {
            background-color: #00adb5;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #008b91;
        }
        .message {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .success {
            color: #5cb85c;
        }
        .error {
            color: #d9534f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Generate Patient Bill</h2>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="message success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php endif; ?>
        <?php if (isset($_SESSION['error'])): ?>
            <div class="message error"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>

        <form method="POST">
            <label for="patient_id">Select Patient:</label>
            <select name="patient_id" required>
                <option value="">-- Select Patient --</option>
                <?php while ($row = mysqli_fetch_assoc($patients)) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                <?php } ?>
            </select>

            <label for="checkup_charges">Checkup Charges (₹):</label>
            <input type="number" name="checkup_charges" required min="0">

            <label for="medicine_charges">Medicine Charges (₹):</label>
            <input type="number" name="medicine_charges" required min="0">

            <input type="submit" name="generate_bill" value="Generate Bill">
        </form>
    </div>
</body>
</html>
