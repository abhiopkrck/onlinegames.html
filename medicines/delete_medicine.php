<!DOCTYPE html>
<html>
<head>
    <title>Delete Medicine</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 400px;
            margin: 60px auto;
            background: #fff;
            padding: 25px 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #c0392b;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #444;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: #e74c3c;
            color: white;
            padding: 10px 0;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #c0392b;
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
    <h2>Delete Medicine</h2>
    <form action="inventory_controller.php" method="POST">
        <input type="hidden" name="delete_medicine" value="1">

        <label>Enter Medicine ID or Name:</label>
        <input type="text" name="medicine_identifier" placeholder="e.g. MED123 or Paracetamol" required>

        <button type="submit">Delete Medicine</button>
    </form>

    <div class="back-link">
        <a href="monitor_stock.php">← Back to Stock</a>
    </div>
</div>

</body>
</html>
