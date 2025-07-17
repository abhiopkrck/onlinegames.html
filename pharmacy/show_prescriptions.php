<!DOCTYPE html>
<html>
<head>
    <title>Show Prescriptions</title>
    <style>
        body {
            background-color: #1e1e2f;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
            background-color: #2a2a3d;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #00d8ff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #3b3b50;
        }

        table, th, td {
            border: 1px solid #444;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #4c4c66;
            color: #fff;
        }

        tr:hover {
            background-color: #505070;
        }

        .back-link {
            margin-top: 20px;
            text-align: center;
        }

        .back-link a {
            text-decoration: none;
            color: #00d8ff;
            font-weight: bold;
            padding: 10px 20px;
            border: 2px solid #00d8ff;
            border-radius: 5px;
            transition: 0.3s;
        }

        .back-link a:hover {
            background-color: #00d8ff;
            color: #1e1e2f;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Prescription Records</h2>

    <?php
    // Example DB connection
    include '../connection.php';

    $sql = "SELECT * FROM prescriptions";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Patient ID</th>
                <th>Checkup ID</th>
                <th>Doctor Name</th>
                <th>Medicines</th>
                <th>Date</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['patient_id'] ?></td>
                    <td><?= $row['checkup_id'] ?></td>
                    <td><?= $row['doctor_name'] ?></td>
                    <td><?= $row['medicines'] ?></td>
                    <td><?= $row['date'] ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No prescriptions found.</p>
    <?php endif; ?>

    <div class="back-link">
        <a href="../index.php">← Back to Dashboard</a>
    </div>
</div>
</body>
</html>
