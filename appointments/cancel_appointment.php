<!DOCTYPE html>
<html>
<head>
    <title>Cancel Appointment</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 450px;
            margin: 70px auto;
            background: #ffffff;
            padding: 35px 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #1f2937;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #374151;
            font-weight: 600;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 16px;
            background-color: #f9fafb;
        }

        input:focus {
            border-color: #ef4444;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ef4444;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #dc2626;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #ef4444;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        .message {
            text-align: center;
            margin-top: 15px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Cancel Appointment</h2>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('../config/db.php');

        $id = $_POST['appointment_id'];

        $sql = "UPDATE appointments SET status = 'Cancelled' WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            echo "<p class='message' style='color:green;'>Appointment #$id has been cancelled.</p>";
        } else {
            echo "<p class='message' style='color:red;'>Error cancelling appointment: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>

    <form method="POST">
        <label for="appointment_id">Enter Appointment ID:</label>
        <input type="number" name="appointment_id" id="appointment_id" required>

        <button type="submit">Cancel Appointment</button>
    </form>

    <div class="back-link">
        <a href="appointments_list.php">← Back to Appointments List</a>
    </div>
</div>

</body>
</html>
