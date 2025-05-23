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
    <title>Donors Management</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            background-color: #f8f9fa;
        }
        form { max-width: 700px; margin-bottom: 40px; }
        input, select { width: 100%; padding: 8px; margin: 6px 0; }
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
<h2>Add New Donor Record</h2>
<form action="donors.php" method="POST">
    <input type="text" name="donor_name" placeholder="Donor Name" required>
    <input type="text" name="blood_group" placeholder="Blood Group" required>
    <input type="number" name="units_provided" placeholder="Units Provided" min="0" required>
    <input type="date" name="donation_date" placeholder="Donation Date" required>
    <input type="text" name="patient_name" placeholder="Patient Name" required>
    <input type="number" name="patient_id" placeholder="Patient ID" required>
    <input type="text" name="hospital_name" placeholder="Hospital Name">
    <input type="number" name="verified_by_member_id" placeholder="Verified by Member ID">
    <input type="number" name="user_id" placeholder="User ID (Donor ID)" required>
    <input type="number" step="0.01" name="money_helped" placeholder="Money Helped (if any)">
    <button type="submit" name="submit">Add Donor Record</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $stmt = $conn->prepare("INSERT INTO donors (donor_name, blood_group, units_provided, donation_date, patient_name, patient_id, hospital_name, verified_by_member_id, user_id, money_helped) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "ssisssisid",
        $_POST['donor_name'],
        $_POST['blood_group'],
        $_POST['units_provided'],
        $_POST['donation_date'],
        $_POST['patient_name'],
        $_POST['patient_id'],
        $_POST['hospital_name'],
        $_POST['verified_by_member_id'],
        $_POST['user_id'],
        $_POST['money_helped']
    );

    if ($stmt->execute()) {
        echo "<p style='color: green;'>Donor record added successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }
    $stmt->close();
}

// Fetch and display donors
$result = $conn->query("SELECT * FROM donors ORDER BY donation_date DESC");

echo "<h2>Donor Records</h2>";
echo "<table>
        <tr>
            <th>ID</th>
            <th>Donor Name</th>
            <th>Blood Group</th>
            <th>Units Provided</th>
            <th>Donation Date</th>
            <th>Patient Name</th>
            <th>Patient ID</th>
            <th>Hospital Name</th>
            <th>Verified by Member ID</th>
            <th>User ID</th>
            <th>Money Helped</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['donor_name']}</td>
        <td>{$row['blood_group']}</td>
        <td>{$row['units_provided']}</td>
        <td>{$row['donation_date']}</td>
        <td>{$row['patient_name']}</td>
        <td>{$row['patient_id']}</td>
        <td>{$row['hospital_name']}</td>
        <td>{$row['verified_by_member_id']}</td>
        <td>{$row['user_id']}</td>
        <td>{$row['money_helped']}</td>
    </tr>";
}
echo "</table>";

$conn->close();
?>
</div>
</body>
</html>
