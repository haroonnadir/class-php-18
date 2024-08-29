<?php
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
echo "Fetched data for ID: " . $id;
?>
