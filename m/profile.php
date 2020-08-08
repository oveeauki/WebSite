<?php

// We need to use sessions, so you should always start sessions using the below code.

session_start();

// If the user is not logged in redirect to the login page...

if (!isset($_SESSION['loggedin'])) {

	header('Location: index.html');

	exit();

}



$DATABASE_HOST = 'remotemysql.com';
$DATABASE_USER = 'WGUYAbZWjC';
$DATABASE_PASS = 'IQi2EelnKp';
$DATABASE_NAME = 'WGUYAbZWjC';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {

	die ('Failed to connect to MySQL: ' . mysqli_connect_error());

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

<html>

	<head>
        <meta charset="UTF-8">
    <meta name="description" content="Lippalakki kanko">
    <meta name="keywords" content="Lippalakki,Kanko,Aslakki,obamium,ungetiboa">
    <meta name="author" content="Aslakki">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
<html>
	<head>
		<meta charset="utf-8">
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a class="style9" href="home.php"><strong>
				<span class="auto-style5">
				Home</span></strong></a>
				<strong><span class="auto-style5">|</span></strong>
				<a href="logout.php" class="style9"><i class="fas fa-sign-out-alt"></i>
				<span class="auto-style5"><strong>Logout</strong></span></a>
			</div>
		</nav>
	</body>
<head>
<meta content="fi" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>LIPPIS</title>
<style type="text/css">

.style3 {

	text-align: center;

}

.style5 {

	font-weight: normal;

}

.style9 {

	text-decoration: none;

}

.style10 {

	color: #FF0000;

	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;

}

</style>
</head>

<body background="Background.jpeg">

<p class="style3">&nbsp;&nbsp;</p>

<table align="center" cellpadding="0" cellspacing="0" class="auto-style4" style="width: 98%; height=95%">
	<tr>
		<td class="style3">
		<img alt="" height="101" src="BannerB.png" width="100%" /></td>
	</tr>
	<tr>
		<td class="style3">
		<strong class="style5">

			<h2 class="auto-style5"><strong>Profile Page</strong></h2>

				<p class="auto-style5"><strong>Your account details : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>

				

			<div>

		<strong class="style5">

				<strong>
				<table style="width: 91px; height: 69px; top: 250px">

					<tr>

						<td class="auto-style5"><strong>Username:</strong></td>

						<td class="auto-style5"><?=$_SESSION['name']?></td>

					</tr>

					<tr>

						<td class="auto-style5"><strong>Password:</strong></td>

						<td class="auto-style5"><?=$password?></td>

					</tr>

					<tr>

						<td class="auto-style5"><strong>Mail xd:</strong></td>

						<td class="auto-style5"><?=$email?></td>

					</tr>

				</table>

				</strong>

		</strong>

			</div>

		</strong>
	
		<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
		</td>
	</tr>
	<tr>
		<td class="style3">
		<img alt="" height="101" src="BannerA.png" width="100%" /></td>
	</tr>
</table>

<p class="style3">&nbsp;</p>
<p class="style3">&nbsp;</p>

</body>
</html>

		<meta charset="utf-8">

		<title>Profile Page</title>

		<link href="style.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="all.css">

		<style type="text/css">



		.auto-style4 {

	background-color: #0066FF;

}

.auto-style5 {

	color: #FFFFFF;

}



		</style>

	</head>

	<body style="background-image: url('Background.jpeg')">

    <body class="loggedin">

		<nav class="navtop">

			<div>

			</div>

		</nav>

		</body>

</html>