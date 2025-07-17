<!DOCTYPE html>
<html>
<head>
    <title>Reschedule Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            color: #444;
        }

        input[type="date"],
        input[type="hidden"] {
            width: 100%;
            padding: 8px 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #0077cc;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005fa3;
        }

        .back-link {
            margin-top: 20px;
            text-align: center;
        }

        .back-link a {
            text-decoration: none;
            color: #0077cc;
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

        <label>New Appointment Date:</label>
        <input type="date" name="new_date" required>

        <button type="submit">Reschedule</button>
    </form>

    <div class="back-link">
        <a href="appointments_list.php">← Back to List</a>
    </div>
</div>

</body>
</html>
<?php
// Reschedule appointment.php
?>
