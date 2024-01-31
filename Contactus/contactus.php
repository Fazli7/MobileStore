
<?php
include_once 'admin/database.php';
// If the user is not logged in redirect to the login page...

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contact_us (name,email,message)
                VALUES ('$name','$email','$message')";
    if (mysqli_query($con, $sql)) {
        echo "Error: " . $sql . "
            " . mysqli_error($con);
    }
    mysqli_close($con);
    echo "<script>alert('Successfully Added!!!'); window.location='index.php'</script>";
}
?>