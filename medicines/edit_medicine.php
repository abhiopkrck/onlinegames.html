<!DOCTYPE html>
<html>
<head>
    <title>Edit Medicine</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #2980b9;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 12px 0;
            margin-top: 25px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        .back-link {
            text-align: center;
            margin-top: 15px;
        }

        .back-link a {
            color: #555;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Medicine</h2>

    <?php
    // Dummy data for editing — replace with DB values
    $medicine = [
        'id' => 'MED001',
        'name' => 'Paracetamol',
        'quantity' => 100,
        'expiry_date' => '2025-12-31'
    ];
    ?>

    <form action="inventory_controller.php" method="POST">
        <input type="hidden" name="edit_medicine" value="1">
        <input type="hidden" name="medicine_id" value="<?php echo $medicine['id']; ?>">

        <label>Medicine Name:</label>
        <input type="text" name="medicine_name" value="<?php echo $medicine['name']; ?>" required>

        <label>Quantity:</label>
        <input type="number" name="medicine_quantity" value="<?php echo $medicine['quantity']; ?>" min="0" required>

        <label>Expiry Date:</label>
        <input type="date" name="expiry_date" value="<?php echo $medicine['expiry_date']; ?>" required>

        <button type="submit">Update Medicine</button>
    </form>

    <div class="back-link">
        <a href="monitor_stock.php">← Back to Stock</a>
    </div>
</div>

</body>
</html>
