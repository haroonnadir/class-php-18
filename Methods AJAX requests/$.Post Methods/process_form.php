<?php
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Guest';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'No Email';
echo "Received: Name = " . $name . ", Email = " . $email;
?>
