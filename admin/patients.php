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
    <title>Patient Campaigns</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            background-color: #f8f9fa;
        }
    
        form { max-width: 800px; margin-bottom: 40px; }
        input, textarea, select { width: 100%; padding: 8px; margin: 6px 0; }
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
<h2>Add New Patient</h2>
<form action="patients.php" method="POST">
    <input type="text" name="name" placeholder="Patient Name" required>
    <input type="text" name="phone" placeholder="Phone">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="doctor_prescription_doc" placeholder="Doctor Prescription File Path">
    <input type="text" name="blood_group" placeholder="Blood Group">
    <textarea name="any_other_help" placeholder="Other Help Needed"></textarea>
    <input type="number" name="raised_by_user_id" placeholder="Raised By User ID">
    <input type="text" name="relationship_with_patient" placeholder="Relationship With Patient">
    <textarea name="description" placeholder="Description"></textarea>
    <input type="number" step="0.01" name="amount_needed" placeholder="Amount Needed">
    <input type="number" step="0.01" name="amount_provided" placeholder="Amount Provided">
    <input type="number" name="blood_provided_units" placeholder="Blood Provided Units">
    <textarea name="images_after_treatment" placeholder="Images After Treatment (comma-separated paths)"></textarea>
    <textarea name="message_from_patient" placeholder="Message from Patient"></textarea>
    <input type="number" name="campaign_id" placeholder="Campaign ID">
    <input type="number" name="approved_by_admin_id" placeholder="Approved By Admin ID (optional)">
    <input type="text" name="hospital_name" placeholder="Hospital Name">
    <input type="text" name="doctor_name" placeholder="Doctor Name">
    <label>Approved: <input type="checkbox" name="is_approved" value="1"></label><br><br>
    <button type="submit" name="submit">Add Patient</button>
</form>

<?php
// INSERT logic
if (isset($_POST['submit'])) {
    $stmt = $conn->prepare("INSERT INTO patients (
        name, phone, email, doctor_prescription_doc, blood_group, any_other_help,
        raised_by_user_id, relationship_with_patient, description, amount_needed,
        amount_provided, blood_provided_units, images_after_treatment, message_from_patient,
        campaign_id, approved_by_admin_id, hospital_name, doctor_name, is_approved
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssddisssissi",
        $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['doctor_prescription_doc'],
        $_POST['blood_group'], $_POST['any_other_help'], $_POST['raised_by_user_id'],
        $_POST['relationship_with_patient'], $_POST['description'], $_POST['amount_needed'],
        $_POST['amount_provided'], $_POST['blood_provided_units'], $_POST['images_after_treatment'],
        $_POST['message_from_patient'], $_POST['campaign_id'], $_POST['approved_by_admin_id'],
        $_POST['hospital_name'], $_POST['doctor_name'], isset($_POST['is_approved']) ? 1 : 0
    );

    if ($stmt->execute()) {
        echo "<p style='color: green;'>Patient added successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }
    $stmt->close();
}

// FETCH and display patients
$result = $conn->query("SELECT * FROM patients ORDER BY id DESC");

echo "<h2>Patient List</h2><table><tr>
    <th>ID</th><th>Name</th><th>Phone</th><th>Email</th><th>Approved</th>
    <th>Amount Needed</th><th>Amount Provided</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['email']}</td>
        <td>" . ($row['is_approved'] ? 'Yes' : 'No') . "</td>
        <td>{$row['amount_needed']}</td>
        <td>{$row['amount_provided']}</td>
    </tr>";
}
echo "</table>";

$conn->close();
?>
</div>
</body>
</html>
