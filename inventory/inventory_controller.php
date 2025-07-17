<?php
include '../includes/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action == "add") {
            // Add new stock item
            $medicine_id = $_POST['medicine_id'];
            $quantity = $_POST['quantity'];

            $query = "INSERT INTO stock (medicine_id, quantity) VALUES ('$medicine_id', '$quantity')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo json_encode(["status" => "success", "message" => "Stock added successfully"]);
            } else {
                echo json_encode(["status" => "error", "message" => "Failed to add stock"]);
            }

        } elseif ($action == "update") {
            // Update stock quantity
            $stock_id = $_POST['stock_id'];
            $quantity = $_POST['quantity'];

            $query = "UPDATE stock SET quantity = '$quantity' WHERE id = '$stock_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo json_encode(["status" => "success", "message" => "Stock updated successfully"]);
            } else {
                echo json_encode(["status" => "error", "message" => "Failed to update stock"]);
            }

        } elseif ($action == "delete") {
            // Delete stock entry
            $stock_id = $_POST['stock_id'];

            $query = "DELETE FROM stock WHERE id = '$stock_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo json_encode(["status" => "success", "message" => "Stock deleted successfully"]);
            } else {
                echo json_encode(["status" => "error", "message" => "Failed to delete stock"]);
            }

        }
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // View all inventory
    $query = "SELECT s.id, m.name AS medicine_name, s.quantity, s.created_at 
              FROM stock s 
              JOIN medicines m ON s.medicine_id = m.id 
              ORDER BY s.created_at DESC";

    $result = mysqli_query($conn, $query);
    $stocks = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $stocks[] = $row;
    }

    echo json_encode($stocks);
}
?>
