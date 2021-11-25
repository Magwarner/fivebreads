<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','cinci_paini');

// get the post records
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtSubject = $_POST['subject'];
$txtMessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `contacte` (`id`, `nume`, `email`, `telefon`, `subiect`, `mesaj`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtSubject', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}