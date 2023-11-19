<?php
$wholename = $_POST['wholename'];
$email = $_POST['email'];
$Subject = $_POST['Subject'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','contact');
if($conn->connect_error) {
    die('Connection Failed  : '.$conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into message(wholename, email, Subject, message)
        values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$wholename, $email, $Subject, $message);
    $stmt->execute();
    echo "Message Successful";
    $stmt->close();
    $conn->close();
}
?>