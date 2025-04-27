<?php
include 'config.php';

$username = $_POST['username'];
$amount = $_POST['amount'];

$check = $conn->query("SELECT balance FROM users WHERE username='$username'");
$row = $check->fetch_assoc();
if ($row['balance'] >= $amount) {
  $conn->query("UPDATE users SET balance = balance - $amount WHERE username='$username'");
  echo "Withdrawal Request Successful!";
} else {
  echo "Not enough balance.";
}
$conn->close();
?>