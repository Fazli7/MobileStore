<?php
require_once('db.php');


$statement = $conn->prepare("DELETE FROM contact_us WHERE id = " . $_GET["id"] . "");
$statement->execute(array(0));

echo "<script>alert('Successfully removed!!!'); window.location='home.php'</script>";
