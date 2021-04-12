<?php
$host = 'localhost';
$user = 'a0493864_root';
$password = 'Apox51s42';
$db_name = 'a0493864_obch';
$conn = new mysqli($host, $user, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$cand = $_POST['cand'];
if ($cand) {
    $sql = "UPDATE candidate SET yes=yes+1 WHERE id=1";
    $conn->query($sql);
    $sql = "INSERT INTO votes VALUES(NULL,'$name', '$email', 'За')";
    $conn->query($sql);
} elseif ($cand == -1) {
    $sql = "UPDATE candidate SET yes=yes+1 WHERE id=0";
    $conn->query($sql);
    $sql = "INSERT INTO votes VALUES(NULL,'$name', '$email', 'Воздержался')";
    $conn->query($sql);
} else {
    $sql = "UPDATE candidate SET yes=yes-1 WHERE id=1";
    $conn->query($sql);
    $sql = "INSERT INTO votes VALUES(NULL,'$name', '$email', 'Против')";
    $conn->query($sql);
}
?>