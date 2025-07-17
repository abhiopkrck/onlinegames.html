<?php
include '../includes/connection.php';
include '../includes/header.php';
include '../includes/navbar.php';
?>

<style>
    .expired {
        background-color: #f8d7da !important;
        color: #721c24 !important;
    }

    .near-expiry {
        background-color: #fff3cd !important;
        color: #856404 !important;
    }

    .badge-expired {
        background-color: #dc3545;
    }

    .badge-near {
        background-color: #ffc107;
    }

    .badge-good {
        background-color: #28a745;
    }
</style>

<div class="container mt-5">
    <h2 class="mb-4 text-center">🧾 Track Medicine Batches</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Batch Number</th>
                    <th>Medicine Name</th>
                    <th>Quantity</th>
                    <th>Expiry Date</th>
                    <th>Status</th>
                    <th>Added On</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT b.id, b.batch_number, m.name AS medicine_name, b.quantity, b.expiry_date, b.created_at
                        FROM batches b 
                        JOIN medicines m ON b.medicine_id = m.id 
                        ORDER BY b.expiry_date ASC";
                $result = mysqli_query($conn, $sql);
                $i = 1;
                $today = date("Y-m-d");

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $expiry = $row['expiry_date'];
                        $rowClass = "";
                        $badge = "";

                        if ($expiry < $today) {
                            $rowClass = "expired";
                            $badge = "<span class='badge badge-expired'>Expired</span>";
                        } elseif (strtotime($expiry) <= strtotime("+30 days")) {
                            $rowClass = "near-expiry";
                            $badge = "<span class='badge badge-near'>Expiring Soon</span>";
                        } else {
                            $badge = "<span class='badge badge-good'>OK</span>";
                        }

                        echo "<tr class='{$rowClass}'>";
                        echo "<td>" . $i++ . "</td>";
                        echo "<td>" . htmlspecialchars($row['batch_number']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['medicine_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['quantity']) . "</td>";
                        echo "<td>" . htmlspecialchars($expiry) . "</td>";
                        echo "<td>" . $badge . "</td>";
                        echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No batch records found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
