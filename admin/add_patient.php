<form method="POST" class="container mt-4 p-4 border rounded bg-light">
  <h3>Add Patient</h3>
  <input type="text" name="name" placeholder="Patient Name" class="form-control mb-2" required>
  <input type="number" name="age" placeholder="Age" class="form-control mb-2" required>
  <input type="text" name="disease" placeholder="Disease" class="form-control mb-2" required>
  <input type="number" name="user_id" placeholder="Your User ID" class="form-control mb-2" required>
  <button name="add" class="btn btn-primary">Submit</button>
</form>

<?php
if (isset($_POST['add'])) {
    $stmt = $conn->prepare("INSERT INTO patients (name, age, disease, user_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sisi", $_POST['name'], $_POST['age'], $_POST['disease'], $_POST['user_id']);
    $stmt->execute();
    echo "<div class='alert alert-success'>Patient Added</div>";
}
?>
