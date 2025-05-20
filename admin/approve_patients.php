<h3 class="container mt-4">Approve Patient Records</h3>
<?php
$result = $conn->query("SELECT * FROM patients WHERE is_approved = 0");
while ($row = $result->fetch_assoc()) {
    echo "<div class='border p-3 m-2'>
            <b>{$row['name']}</b> (Age: {$row['age']}, Disease: {$row['disease']}) 
            <form method='POST'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <button name='approve_patient' class='btn btn-sm btn-success'>Approve</button>
            </form>
          </div>";
}
if (isset($_POST['approve_patient'])) {
    $conn->query("UPDATE patients SET is_approved = 1 WHERE id = " . $_POST['id']);
    header("Refresh:0");
}
?>
