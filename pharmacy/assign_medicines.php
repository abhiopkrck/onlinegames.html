<?php
// Assign medicines.php
<!DOCTYPE html>
<html>
<head>
    <title>Assign Medicine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8fb;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            margin: 40px auto;
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 15px;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="number"],
        input[type="text"],
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .back-link {
            margin-top: 15px;
            text-align: center;
        }

        .back-link a {
            color: #3498db;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Assign Medicine to Patient</h2>
        <form method="POST" action="medicines_controller.php">
            <input type="hidden" name="assign_medicine" value="1">

            <label>Patient ID:</label>
            <input type="number" name="patient_id" required>

            <label>Medicine Name:</label>
            <input type="text" name="medicine_name" required>

            <label>Dosage (e.g., 2 tablets/day):</label>
            <input type="text" name="dosage" required>

            <label>Duration (in days):</label>
            <input type="number" name="duration" required>

            <button type="submit">Assign Medicine</button>
        </form>

        <div class="back-link">
            <a href="view_medicines.php">← Back to Medicines</a>
        </div>
    </div>
</body>
</html>
