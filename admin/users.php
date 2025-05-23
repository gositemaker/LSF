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
    <title>Users Management</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {  display: flex;
            height: 100vh;
            background-color: #f8f9fa;}
        form { max-width: 600px; margin-bottom: 40px; }
        input, select { width: 100%; padding: 8px; margin: 6px 0; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background-color: #f4f4f4; }
        img.profile { width: 50px; height: 50px; object-fit: cover; border-radius: 50%; }
      
        .sidebar {
            width: 250px;
            height: 100vh;
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
<h2>Add New User</h2>
<form action="users.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone">
    
    <label>Blood Group</label>
    <input type="text" name="blood_group" placeholder="Blood Group">
    <label>Blood Group Proof (file path or URL)</label>
    <input type="text" name="blood_group_proof" placeholder="Blood Group Proof">

    <label>Profile Image URL or Path</label>
    <input type="text" name="profile_image" placeholder="Profile Image URL or Path">

    <label>User Type</label>
    <select name="user_type" required>
        <option value="">--Select User Type--</option>
        <option value="donor">Donor</option>
        <option value="admin">Admin</option>
        <option value="patient">Patient</option>
        <option value="member">Member</option>
    </select>

    <label>Gender</label>
    <select name="gender">
        <option value="">--Select Gender--</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>

    <input type="number" name="age" placeholder="Age" min="0" max="120">

    <button type="submit" name="submit">Add User</button>
</form>

<?php
if (isset($_POST['submit'])) {
    // Prepare and bind insert statement
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone,blood_group, blood_group_proof, profile_image, user_type, gender, age) VALUES (?, ?.?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "ssssssssi",
        $_POST['name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['blood_group'],
        $_POST['blood_group_proof'],
        $_POST['profile_image'],
        $_POST['user_type'],
        $_POST['gender'],
        $_POST['age']
    );

    if ($stmt->execute()) {
        echo "<p style='color: green;'>User added successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }
    $stmt->close();
}

// Fetch and display users
$result = $conn->query("SELECT * FROM users ORDER BY created_at DESC");

echo "<h2>User List</h2>";
echo "<table>
        <tr>
            <th>ID</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>User Type</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Created At</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    $profileImg = $row['profile_image'] ? $row['profile_image'] : 'https://via.placeholder.com/50?text=No+Image';
    echo "<tr>
        <td>{$row['id']}</td>
        <td><img class='profile' src='{$profileImg}' alt='Profile'></td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['user_type']}</td>
        <td>{$row['gender']}</td>
        <td>{$row['age']}</td>
        <td>{$row['created_at']}</td>
    </tr>";
}
echo "</table>";

$conn->close();
?>
</div>
</body>
</html>
