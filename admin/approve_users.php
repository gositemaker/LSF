<?php include 'db.php'; ?>
<h3 class="container mt-4">Approve Users</h3>
<?php
$result = $conn->query("SELECT * FROM users WHERE is_approved = 0");
while ($row = $result->fetch_assoc()) {
    echo "<div class='border p-3 m-2'>
            <b>{$row['name']}</b> ({$row['email']}) 
            <form method='POST'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <button name='approve' class='btn btn-sm btn-success'>Approve</button>
            </form>
          </div>";
}
if (isset($_POST['approve'])) {
    $conn->query("UPDATE users SET is_approved = 1 WHERE id = " . $_POST['id']);
    header("Refresh:0");
}
?>
