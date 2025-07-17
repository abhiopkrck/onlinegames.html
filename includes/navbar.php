<!-- navbar.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboard.php">Clinic Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#clinicNavbar" aria-controls="clinicNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="clinicNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/patients/patients_list.php">Patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/appointments/appointments_list.php">Appointments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/checkups/checkups_list.php">Checkups</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/prescriptions/generate_prescription.php">Prescriptions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/billing/generate_bill.php">Billing</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="/logout.php" class="btn btn-light btn-sm">Logout</a>
      </span>
    </div>
  </div>
</nav>
