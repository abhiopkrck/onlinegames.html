<!DOCTYPE html>
<html>
<head>
    <title>Medicines List</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            padding: 30px;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a.button {
            padding: 7px 12px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 5px;
        }

        .edit {
            background-color: #27ae60;
        }

        .delete {
            background-color: #c0392b;
        }

        .add-btn {
            display: inline-block;
            margin-bottom: 15px;
            background-color: #2ecc71;
            color: white;
            padding: 10px 18px;
            border-radius: 5px;
            text-decoration: none;
        }

        .add-btn:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Medicine Inventory</h2>

    <a href="add_medicine.php" class="add-btn">+ Add New Medicine</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Medicine Name</th>
                <th>Quantity</th>
                <th>Expiry Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Sample static data (replace with DB fetch)
        $medicines = [
            ['id' => 1, 'name' => 'Paracetamol', 'quantity' => 100, 'expiry' => '2025-12-31'],
            ['id' => 2, 'name' => 'Aspirin', 'quantity' => 50, 'expiry' => '2024-11-30'],
        ];

        foreach ($medicines as $medicine) {
            echo "<tr>
                    <td>{$medicine['id']}</td>
                    <td>{$medicine['name']}</td>
                    <td>{$medicine['quantity']}</td>
                    <td>{$medicine['expiry']}</td>
                    <td>
                        <a class='button edit' href='edit_medicine.php?id={$medicine['id']}'>Edit</a>
                        <a class='button delete' href='delete_medicine.php?id={$medicine['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                    </td>
                </tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
