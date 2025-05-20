<?php
// index.php - Admin Dashboard Main Layout with Sidebar
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            flex-grow: 1;
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>Admin Panel</h4>
        <a href="add_user.php"><i class="fas fa-user-plus"></i> Add User</a>
        <a href="approve_users.php"><i class="fas fa-user-check"></i> Approve Users</a>
        <a href="add_patient.php"><i class="fas fa-notes-medical"></i> Add Patient</a>
        <a href="approve_patients.php"><i class="fas fa-file-medical"></i> Approve Patients</a>
        <a href="index.php"><i class="fas fa-chart-bar"></i> Dashboard</a>
    </div>
    <div class="content">
        <h2>Welcome to Admin Dashboard</h2>
        <canvas id="myChart" height="100"></canvas>
        <?php
            $user_count = $conn->query("SELECT COUNT(*) AS total FROM users")->fetch_assoc()['total'];
            $group_result = $conn->query("SELECT blood_group, COUNT(*) as count FROM users GROUP BY blood_group");

            $labels = [];
            $data = [];
            while ($row = $group_result->fetch_assoc()) {
                $labels[] = $row['blood_group'];
                $data[] = $row['count'];
            }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('myChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($labels); ?>,
                    datasets: [{
                        label: 'Users per Blood Group',
                        data: <?php echo json_encode($data); ?>,
                        backgroundColor: 'rgba(54, 162, 235, 0.6)'
                    }]
                }
            });
        </script>
    </div>
</body>
</html>
