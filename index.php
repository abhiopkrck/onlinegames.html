<!DOCTYPE html>
<html>
<head>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: #f5f7fa;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 30px;
            text-align: center;
        }
        .nav-link {
            font-weight: bold;
        }
        .features {
            padding: 50px 0;
        }
        .feature-box {
            background: white;
            padding: 25px;
            margin: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Clinic Management System</h1>
    <p>Manage Patients, Medicines, Appointments, and Billing Seamlessly</p>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CMS</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="patients/index.php" class="nav-link">Patients</a></li>
            <li class="nav-item"><a href="medicines/index.php" class="nav-link">Medicines</a></li>
            <li class="nav-item"><a href="appointments/index.php" class="nav-link">Appointments</a></li>
            <li class="nav-item"><a href="billing/index.php" class="nav-link">Billing</a></li>
        </ul>
    </div>
</nav>

<div class="container features text-center">
    <div class="row">
        <div class="col-md-4 feature-box">
            <img src="images/patients.png" alt="Patients" width="80">
            <h3>Patient Records</h3>
            <p>Add, Edit, View and Delete patient details</p>
        </div>
        <div class="col-md-4 feature-box">
            <img src="images/medicine.png" alt="Medicines" width="80">
            <h3>Manage Medicines</h3>
            <p>Inventory and supplier management system</p>
        </div>
        <div class="col-md-4 feature-box">
            <img src="images/appointment.png" alt="Appointments" width="80">
            <h3>Appointments</h3>
            <p>Track and manage doctor appointments</p>
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; <?php echo date("Y"); ?> Clinic Management System. All rights reserved.</p>
</div>

</body>
</html>
