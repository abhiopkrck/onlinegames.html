<!DOCTYPE html>
<html>
<head>
    <title>Reschedule Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            margin: 0;
            padding: 0;
        }

        .form-container {
            background-color: #ffffff;
            width: 90%;
            max-width: 600px;
            margin: 50px auto;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }

        input[type="date"],
        input[type="hidden"] {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 15px;
        }

        button {
            margin-top: 25px;
            width: 100%;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Reschedule Appointment</h2>
    <form method="POST" action="appointments_controller.php">
        <input type="hidden" name="reschedule_appointment" value="1">
        <input type="hidden" name="appointment_id" value="<?php echo $_GET['id']; ?>">

        <label for="new_date">New Appointment Date:</label>
        <input type="date" id="new_date" name="new_date" required>

        <button type="submit">Reschedule</button>
    </form>

    <div class="back-link">
        <a href="view_appointments.php">← Back to Appointments</a>
    </div>
</div>

</body>
</html>
