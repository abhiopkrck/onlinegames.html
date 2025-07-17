

<!DOCTYPE html>
<html>
<head>
    <title>Add Appointment</title>
  <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f3f4f6;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px;
        margin: 60px auto;
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #111827;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #374151;
        font-weight: 600;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 16px;
        background-color: #f9fafb;
        transition: border 0.3s;
    }

    input:focus,
    select:focus {
        border-color: #3b82f6;
        outline: none;
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: #3b82f6;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    button:hover {
        background-color: #2563eb;
    }

    .back-link {
        text-align: center;
        margin-top: 15px;
    }

    .back-link a {
        color: #3b82f6;
        text-decoration: none;
        font-size: 14px;
    }

    .back-link a:hover {
        text-decoration: underline;
    }
</style>

</head>
<body>

<div class="container">
    <h2>New Appointment</h2>
    <form method="POST" action="appointments_controller.php">
        <input type="hidden" name="add_appointment" value="1">

        <label>Patient ID:</label>
        <input type="number" name="patient_id" required>

        <label>Doctor Name:</label>
        <input type="text" name="doctor_name" required>

        <label>Appointment Date:</label>
        <input type="date" name="appointment_date" required>

        <label>Status:</label>
        <select name="status" required>
            <option value="Scheduled">Scheduled</option>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
        </select>

        <button type="submit">Add Appointment</button>
    </form>

    <div class="back-link">
        <a href="appointments_list.php">← Back to Appointments List</a>
    </div>
</div>

</body>
</html>
