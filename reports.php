<?php
// Start session and check if the admin is logged in
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php'); // Redirect to login page if not an admin
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Petopia Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #F39E60;
        }
        .main-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        h2 {
            color: #7C444F;
            font-weight: 700;
        }
        .btn-back {
            margin-bottom: 20px;
            background-color: #E16A54;
            color: white;
            border: none;
        }
        .btn-back:hover {
            background-color: #9F5255;
            color: white;
        }
        .table th {
            background-color: #7C444F;
            color: white;
        }
        .table td {
            background-color: white;
        }
        .btn-warning {
            background-color: #E16A54;
            border-color: #E16A54;
            color: white;
        }
        .btn-warning:hover {
            background-color: #9F5255;
            border-color: #9F5255;
        }
        .btn-danger {
            background-color: #F39E60;
            border-color: #F39E60;
            color: white;
        }
        .btn-danger:hover {
            background-color: #E16A54;
            border-color: #E16A54;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="main-content">
            <h2>Reports</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Report ID</th>
                        <th>Pet Name</th>
                        <th>Health Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Fluffy</td>
                        <td>Healthy</td>
                        <td>2025-01-09</td>
                        <td>
                            <button class="btn btn-warning btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Buddy</td>
                        <td>Sick</td>
                        <td>2025-01-08</td>
                        <td>
                            <button class="btn btn-warning btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="admin_dashboard.php" class="btn btn-back">Back to Dashboard</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
