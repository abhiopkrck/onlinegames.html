<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clinic Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Optional: Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/form.css"> <!-- adjust path if needed -->

    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #0d6efd;
            color: white;
            padding: 12px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 500;
        }
        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<nav>
    <div>
        <strong>Clinic Management</strong>
    </div>
    <div>
        <a href="/dashboard.php">Dashboard</a>
        <a href="/patients/patients_list.php">Patients</a>
        <a href="/appointments/appointments_list.php">Appointments</a>
        <a href="/checkups/checkups_list.php">Checkups</a>
        <a href="/logout.php">Logout</a>
    </div>
</nav>
