<?php
include '../includes/connection.php';
include '../includes/header.php';
include '../includes/navbar.php';
?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">🩺 Monitor Medicine Stock</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Medicine Name</th>
                    <th>Quantity in Stock</th>
                    <th>Last Updated</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT s.id, m.name AS medicine_name, s.quantity, s.created_at 
                          FROM stock s 
                          JOIN medicines m ON s.medicine_id = m.id 
                          ORDER BY s.created_at DESC";

                $result = mysqli_query($conn, $query);
                $i = 1;

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $i++ . "</td>";
                        echo "<td>" . htmlspecialchars($row['medicine_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['quantity']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>No stock data found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
