<?php
include 'config.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$phone = $_POST['phone'];
$referral = $_POST['referral'];

$welcome_bonus = 20;

$sql = "INSERT INTO users (username, password, phone, balance, referral_code) VALUES ('$username', '$password', '$phone', $welcome_bonus, '')";

if ($conn->query($sql) === TRUE) {
  if (!empty($referral)) {
    $conn->query("UPDATE users SET balance = balance + 50 WHERE referral_code = '$referral'");
  }
  echo "Signup Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>