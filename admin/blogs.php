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
    <title>Blogs Management</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        
            body {
                display: flex;
                height: 100vh;
                background-color: #f8f9fa;
            }
        form { max-width: 700px; margin-bottom: 40px; }
        input, textarea { width: 100%; padding: 8px; margin: 6px 0; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; vertical-align: top;}
        th { background-color: #f4f4f4; }
        img { max-width: 100px; max-height: 80px; object-fit: cover; margin: 2px; }
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
<h2>Add New Blog</h2>
<form action="blogs.php" method="POST">
    <input type="text" name="title" placeholder="Blog Title" required>
    <textarea name="description" placeholder="Description" rows="4" required></textarea>
    <input type="text" name="video" placeholder="Video URL or file path">
    <input type="text" name="images" placeholder="Images (comma-separated URLs or paths)">
    <input type="url" name="external_link" placeholder="External Link">
    <input type="text" name="patient_name" placeholder="Patient Name" required>
    <input type="number" name="age" placeholder="Age" min="0" max="120" required>
    <input type="text" name="location" placeholder="Location">
    <textarea name="helped_with" placeholder="Helped With" rows="2"></textarea>
    <button type="submit" name="submit">Add Blog</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $stmt = $conn->prepare("INSERT INTO blogs (title, description, video, images, external_link, patient_name, age, location, helped_with) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "ssssssiss",
        $_POST['title'],
        $_POST['description'],
        $_POST['video'],
        $_POST['images'],
        $_POST['external_link'],
        $_POST['patient_name'],
        $_POST['age'],
        $_POST['location'],
        $_POST['helped_with']
    );

    if ($stmt->execute()) {
        echo "<p style='color: green;'>Blog added successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }
    $stmt->close();
}

// Fetch and display blogs
$result = $conn->query("SELECT * FROM blogs ORDER BY created_at DESC");

echo "<h2>Blogs List</h2>";
echo "<table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Video</th>
            <th>Images</th>
            <th>External Link</th>
            <th>Patient Name</th>
            <th>Age</th>
            <th>Location</th>
            <th>Helped With</th>
            <th>Created At</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    // Prepare images display
    $imagesHtml = "";
    if ($row['images']) {
        $images = explode(",", $row['images']);
        foreach ($images as $img) {
            $img = trim($img);
            if ($img) {
                $imagesHtml .= "<img src='{$img}' alt='Blog Image'>";
            }
        }
    }
    // Video as clickable link
    $videoLink = $row['video'] ? "<a href='{$row['video']}' target='_blank'>Video Link</a>" : "";

    // External link
    $externalLink = $row['external_link'] ? "<a href='{$row['external_link']}' target='_blank'>External Link</a>" : "";

    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['title']}</td>
        <td style='max-width: 300px;'>{$row['description']}</td>
        <td>{$videoLink}</td>
        <td>{$imagesHtml}</td>
        <td>{$externalLink}</td>
        <td>{$row['patient_name']}</td>
        <td>{$row['age']}</td>
        <td>{$row['location']}</td>
        <td>{$row['helped_with']}</td>
        <td>{$row['created_at']}</td>
    </tr>";
}
echo "</table>";

$conn->close();
?>
</div>
</body>
</html>
