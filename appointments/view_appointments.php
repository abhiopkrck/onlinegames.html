<!DOCTYPE html>
<html>
<head>
    <title>Reschedule Appointment</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background: white;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="date"],
        input[type="hidden"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        button {
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            text-decoration: none;
            color: #007bff;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
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
