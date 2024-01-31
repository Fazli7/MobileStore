<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
include_once 'database.php';
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login/index.php');
	exit;
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>Profile Page</title>
	<link href="style.css" rel="stylesheet" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body class="loggedin">

	<header class="header">
		<a href="home.php" class="logo">Dashboard Admin</a>
		<input class="menu-btn" type="checkbox" id="menu-btn" />
		<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
		<ul class="menu">

			
			<li> <a href="home.php"><i class="fas fa-home"></i>Home</a></li>
            <li> <a href="admins/index.php"><i class="fas fa-user-circle"></i>Admins</a> </li>
            <li> <a href="gallery/index.php"><i class="fas fa-image"></i>Phones</a> </li>
            <li> <a href="accessories/index.php"><i class="fas fa-image"></i>Accessories</a> </li>
            <li> <a href="watches/index.php"><i class="fas fa-image"></i>Watches</a> </li>
            <li> <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a> </li>
            <li> <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a> </li>
		</ul>
	</header>
	<div class="content">
		<h2>Profile Page</h2>
		<div>
			<p>Your account details are below:</p>
			<table>
				<tr>
					<td>Username:</td>
					<td><?= $_SESSION['name'] ?></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><?= $password ?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><?= $email ?></td>
				</tr>
			</table>
		</div>
	</div>
</body>

</html>