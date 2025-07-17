<?php
include '../includes/connection.php';
include '../includes/header.php';
include '../includes/navbar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $medicine_id = $_POST['medicine_id'];
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO stock (medicine_id, quantity) VALUES ('$medicine_id', '$quantity')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<div class='alert alert-success m-3'>✅ Stock added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger m-3'>❌ Error: " . mysqli_error($conn) . "</div>";
    }
}
?>

<!-- Custom CSS -->
<style>
    body {
        background-color: #f5f7fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
        border-radius: 12px;
    }

    .card-header {
        background: linear-gradient(45deg, #007bff, #0056b3);
    }

    .card-header h4 {
        color: white;
        font-weight: 600;
    }

    label {
        font-weight: 500;
    }

    .btn-success {
        border-radius: 8px;
        padding: 8px 20px;
        font-weight: 500;
    }

    .alert {
        border-radius: 8px;
        font-weight: 500;
    }

    .form-control {
        border-radius: 8px;
    }
</style>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header">
            <h4 class="mb-0">➕ Add New Stock</h4>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="medicine_id" class="form-label">Medicine ID</label>
                    <input type="text" class="form-control" name="medicine_id" id="medicine_id" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" id="quantity" required>
                </div>
                <button type="submit" class="btn btn-success">Submit Stock</button>
            </form>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
