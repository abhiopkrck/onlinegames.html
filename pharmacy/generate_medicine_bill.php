<?php
// Generate medicine bill.php
?><?php
// Simulated bill generation logic (replace with actual DB fetch)
$patient_name = "John Doe";
$patient_id = 101;
$medicines = [
    ['name' => 'Paracetamol', 'dosage' => '2 tablets/day', 'duration' => 5, 'price_per_day' => 10],
    ['name' => 'Amoxicillin', 'dosage' => '1 capsule/day', 'duration' => 7, 'price_per_day' => 15],
];

$total_amount = 0;
foreach ($medicines as $med) {
    $total_amount += $med['duration'] * $med['price_per_day'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Medicine Bill</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f8fb;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 700px;
            margin: 40px auto;
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2, h3 {
            text-align: center;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background-color: #3498db;
            color: white;
        }

        .total {
            font-weight: bold;
            font-size: 18px;
            text-align: right;
            margin-top: 20px;
        }

        .print-btn {
            margin-top: 25px;
            display: flex;
            justify-content: center;
        }

        .print-btn button {
            background-color: #2ecc71;
            border: none;
            padding: 12px 25px;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .print-btn button:hover {
            background-color: #27ae60;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            text-decoration: none;
            color: #3498db;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Clinic Management System</h2>
        <h3>Medicine Bill</h3>
        <p><strong>Patient Name:</strong> <?php echo $patient_name; ?></p>
        <p><strong>Patient ID:</strong> <?php echo $patient_id; ?></p>

        <table>
            <tr>
                <th>Medicine</th>
                <th>Dosage</th>
                <th>Duration (days)</th>
                <th>Rate/Day (₹)</th>
                <th>Total (₹)</th>
            </tr>
            <?php foreach ($medicines as $med): ?>
                <tr>
                    <td><?php echo $med['name']; ?></td>
                    <td><?php echo $med['dosage']; ?></td>
                    <td><?php echo $med['duration']; ?></td>
                    <td><?php echo $med['price_per_day']; ?></td>
                    <td><?php echo $med['duration'] * $med['price_per_day']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <p class="total">Total Amount: ₹<?php echo $total_amount; ?></p>

        <div class="print-btn">
            <button onclick="window.print()">Print Bill</button>
        </div>

        <div class="back-link">
            <a href="view_medicines.php">← Back to Medicines</a>
        </div>
    </div>
</body>
</html>
