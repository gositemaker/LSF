<!-- Add User Form (Bootstrap) -->
<?php include 'db.php'; ?>
<form action="" method="POST" enctype="multipart/form-data" class="container mt-4 p-4 border rounded shadow-sm bg-light">
  <h3>Add User</h3>
  <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
  <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
  <input type="text" name="phone" placeholder="Phone Number" class="form-control mb-2" required>
  <input type="text" name="blood_group" placeholder="Blood Group" class="form-control mb-2" required>
  <input type="file" name="profile_photo" class="form-control mb-2" required>
  <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
  <button type="submit" name="submit" class="btn btn-primary">Add User</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $target = "uploads/" . basename($_FILES['profile_photo']['name']);
    move_uploaded_file($_FILES['profile_photo']['tmp_name'], $target);

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, blood_group, profile_photo, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['blood_group'], $target, $password);
    $stmt->execute();
    echo "<div class='alert alert-success'>User Added</div>";
}
?>
