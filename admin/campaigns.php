<?php include 'db.php'; 
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Campaigns Management</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            background-color: #f8f9fa;
        }
        form { max-width: 600px; margin-bottom: 40px; }
        input, textarea { width: 100%; padding: 8px; margin: 6px 0; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background-color: #f4f4f4; }

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
        <a href="users.php"><i class="fas fa-user-plus"></i> Add User</a>
        <a href="member.php"><i class="fas fa-user-plus"></i> Members</a>
        <a href="campaigns.php"><i class="fas fa-user-check"></i>Campaign</a>
        <a href="patients.php"><i class="fas fa-file-medical"></i> Patients</a>
        <a href="donors.php"><i class="fas fa-chart-bar"></i>Donor </a>
        <a href="blogs.php"><i class="fas fa-chart-bar"></i>Blogs </a>
        <a href="admin.php"><i class="fas fa-chart-bar"></i> Dashboard</a>
       <form method="POST" style="margin-top: 20px;">
    <button type="submit" name="logout" class="btn btn-danger w-100">
        <i class="fas fa-sign-out-alt"></i> Logout
    </button>
</form>

<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    echo '<script>window.location.replace("index.php");</script>';
    exit;
}

?>
    </div>
    <div class="content">
<h2>Add New Campaign</h2>
<form action="campaigns.php" method="POST">
    <input type="text" name="name" placeholder="Campaign Name" required>
    <input type="text" name="patient_name" placeholder="Patient Name" required>
    <input type="text" name="title" placeholder="Campaign Title" required>
    <input type="text" name="disease" placeholder="Disease" required>
    <input type="number" step="0.01" name="money_required" placeholder="Money Required" required>
    <button type="submit" name="submit">Add Campaign</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $stmt = $conn->prepare("INSERT INTO campaigns (name, patient_name, title, disease, money_required) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "ssssd",
        $_POST['name'],
        $_POST['patient_name'],
        $_POST['title'],
        $_POST['disease'],
        $_POST['money_required']
    );

    if ($stmt->execute()) {
        echo "<p style='color: green;'>Campaign added successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }
    $stmt->close();
}

// Fetch and display campaigns
$result = $conn->query("SELECT * FROM campaigns ORDER BY created_at DESC");

echo "<h2>Campaign List</h2>";
echo "<table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Patient Name</th>
            <th>Title</th>
            <th>Disease</th>
            <th>Money Required</th>
            <th>Created At</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['patient_name']}</td>
        <td>{$row['title']}</td>
        <td>{$row['disease']}</td>
        <td>{$row['money_required']}</td>
        <td>{$row['created_at']}</td>
    </tr>";
}
echo "</table>";

$conn->close();
?>
</div>
</body>
</html>
