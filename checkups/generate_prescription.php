<!DOCTYPE html>
<html>
<head>
    <title>Generate Prescription</title>
   <style>body {
    font-family: Arial, sans-serif;
    background-color: #f4f6f8;
    margin: 0;
    padding: 0;
}

.container {
    width: 500px;
    margin: 50px auto;
    background-color: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin-top: 15px;
    font-weight: bold;
}

input[type="text"],
input[type="number"],
input[type="date"],
textarea,
select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    margin-top: 20px;
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

.back-link {
    margin-top: 20px;
    text-align: center;
}

.back-link a {
    text-decoration: none;
    color: #007bff;
}
</style>
</head>
<body>
<div class="container">
    <h2>Generate Prescription</h2>

    <form method="POST" action="prescription_controller.php">
        <input type="hidden" name="generate_prescription" value="1">

        <label>Patient ID:</label>
        <input type="number" name="patient_id" required>

        <label>Doctor Name:</label>
        <input type="text" name="doctor_name" required>

        <label>Diagnosis:</label>
        <textarea name="diagnosis" rows="3" required></textarea>

        <label>Prescribed Medicines:</label>
        <textarea name="medicines" rows="4" placeholder="e.g. Paracetamol 500mg - 2 times a day" required></textarea>

        <label>Additional Notes:</label>
        <textarea name="notes" rows="3"></textarea>

        <button type="submit">Generate Prescription</button>
    </form>

    <div class="back-link">
        <a href="checkups_list.php">← Back to Checkups</a>
    </div>
</div>
</body>
</html>
