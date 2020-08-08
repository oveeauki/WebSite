<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'sipinetx_root';
$DATABASE_PASS = 'fM86RC;]IiTY';
$DATABASE_NAME = 'sipinetx_ok';
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
<html xmlns="http://www.w3.org/1999/xhtml">
<noscript>
    <meta http-equiv="refresh" content="3" />
</noscript>

<body class="loggedin">
		<nav class="navtop">
	</head>
			<div>
				<a href="profile.php" class="auto-style1"><strong><span class="auto-style1">Profile</span></strong></a>
				<strong><span class="auto-style1">|</span></strong>
				<a href="logout.php" class="auto-style1"><i class="fas fa-sign-out-alt"></i>
				<span class="auto-style1"><strong>Logout</strong></span></div></a>
		</nav>
	</body>

<head><meta charset="euc-kr"> 

<title>sami tulee teille</title>
<style type="text/css">
.style3 {
	text-align: center;
}
.style1 {
	background-color: #000000;
}
.style2 {
	text-align: center;
	border: 2px solid #000000;
}
.style4 {
	color: #FF0000;
	font-weight: bold;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.style5 {
	color: #FF0000;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.style6 {
	border: 2px solid #000000;
	color: #FF0000;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.style7 {
	text-decoration: none;
}
.auto-style1 {
	color: #FF0000;
	text-decoration: none;
}
</style>
</head>

<body style="background-image: url('zx.png')">

<p class="style3">&nbsp;&nbsp;</p>

<table align="center" cellpadding="0" cellspacing="0" class="style1" style="width: 900px">
	<tr>
		<td class="style3">
		<img alt="" height="101" src="BannerB.png" width="901" /></td>
	</tr>
	<tr>
		<td class="style2" style="height: 38px" color="#FFFFFF"> &nbsp;<br />
		<a href="xqcl.php" class="style7"><span class="style4">xqcL - </span></a>
		<strong><span class="style5"><a class="style7" href="home.php">
		<span class="auto-style1">joo</span></a></span></strong><a href="xqcl.php" class="style7"><span class="style4"> 
		-</span></a>
		<span class="style5"><strong><span class="auto-style1">Tällee samille - </span></strong></span>
		<a href="chat.php" class="auto-style1"><strong>
		<span class="auto-style1">Chatti</span></strong></a></td>
	</tr>
	<tr>
		<td class="style3">
		<br />
		<br />
		<br />
		<br title="klonku" />
		<br />
		<Video STYLE="position:absolute; TOP:223px; LEFT:532px; WIDTH:858px; HEIGHT:480px" SRC="joo.webm" controls>
        <source src="joo.webm" type="video/webm">
</video>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		</td>
	</tr>
	<tr>
		<td class="style3">
		&nbsp;</td>
	</tr>
	<tr>
		<td class="style3">
		<img alt="" height="101" src="BannerA.png" width="901" /></td>
	</tr>
</table>

<p class="style3">&nbsp;</p>
<p class="style3">&nbsp;</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src=public_html/bootstrap/js/bootstrap.min.js"></script>
<script src=public_html/angular/angular.js"></script>
<script src=public_html/vue/vue.js"></script>


</body>

</html>
