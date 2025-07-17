<!DOCTYPE html>
<html>
<head>
    <title>View Medicines</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #1e293b;
            color: white;
        }

        tr:hover {
            background-color: #f1f5f9;
        }

        .action-btn {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }

        .edit {
            background-color: #3b82f6;
        }

        .delete {
            background-color: #ef4444;
        }

        .add-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #10b981;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .add-button:hover {
            background-color: #059669;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Medicines List</h2>

    <a class="add-button" href="add_medicine.php">+ Add Medicine</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Medicine Name</th>
                <th>Batch No</th>
                <th>Quantity</th>
                <th>Expiry Date</th>
                <th>Supplier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $query = "SELECT * FROM medicines";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['batch_no']}</td>
                        <td>{$row['quantity']}</td>
                        <td>{$row['expiry_date']}</td>
                        <td>{$row['supplier']}</td>
                        <td>
                            <a class='action-btn edit' href='edit_medicine.php?id={$row['id']}'>Edit</a>
                            <a class='action-btn delete' href='delete_medicine.php?id={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this medicine?');\">Delete</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
