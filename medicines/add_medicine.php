<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 0;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 25px 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #444;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .back-link {
            text-align: center;
            margin-top: 15px;
        }

        .back-link a {
            color: #4CAF50;
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
    <h2>Add New Medicine</h2>
    <form action="inventory_controller.php" method="POST">
        <input type="hidden" name="add_medicine" value="1">

        <label>Medicine Name:</label>
        <input type="text" name="medicine_name" required>

        <label>Manufacturer:</label>
        <input type="text" name="manufacturer" required>

        <label>Batch No:</label>
        <input type="text" name="batch_no" required>

        <label>Expiry Date:</label>
        <input type="date" name="expiry_date" required>

        <label>Quantity:</label>
        <input type="number" name="quantity" required min="1">

        <label>Unit Price (₹):</label>
        <input type="number" name="unit_price" step="0.01" required>

        <button type="submit">Add Medicine</button>
    </form>

    <div class="back-link">
        <a href="monitor_stock.php">← Back to Stock</a>
    </div>
</div>

</body>
</html>
