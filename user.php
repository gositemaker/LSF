<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $blood_group=$_POST['bld'];
}

?>