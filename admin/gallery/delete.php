<?php
require_once('../db.php');


$stmt = $conn->prepare("DELETE FROM gallery WHERE tbl_image_id = :image_id");
$stmt->bindParam(':image_id', $_GET["tbl_image_id"], PDO::PARAM_INT);
$stmt->execute();


echo "<script>alert('Successfully removed!!!'); window.location='index.php'</script>";
