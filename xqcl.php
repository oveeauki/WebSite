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
				<a href="profile.php" class="style6"><strong><span class="auto-style6">Profile</span></strong></a>
				<strong><span class="style6">|</span></strong>
				<a href="logout.php" class="style6"><i class="fas fa-sign-out-alt"></i>
				<span class="auto-style1"><strong>Logout</strong></span></div></a>
		</nav>
	</body>


<head><meta charset="euc-kr">

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
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.style5 {
	color: #FF0000;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	border: 2px solid #000000;
}
.style6 {
	color: #FF0000;
	text-decoration: none;
	
}
.auto-style1 {
	text-align: center;
}
.auto-style2 {
	text-align: center;
	border-top-style: solid;
	border-top-width: 1px;
}
.auto-style3 {
	text-align: center;
	border-bottom-style: solid;
	border-bottom-width: 1px;
}
.auto-style4 {
	background-color: #000000;
	border-left-width: 0px;
	border-right-width: 0px;
}
.auto-style5 {
	color: #FF0000;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	font-size: small;
}
.auto-style6 {
	color: #FF0000;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	font-size: medium;
}
</style>
</head>

<body background="Background.jpeg">

<p class="style3">&nbsp;&nbsp;</p>

<table align="center" cellpadding="0" cellspacing="0" class="auto-style4" style="width: 900px">
	<tr>
		<td class="auto-style3">
		<img alt="" height="101" src="BannerB.png" width="901" /></td>
	</tr>
	<tr>
		<td class="auto-style1" style="height: 38px"><strong>
		<span class="auto-style6">xqcL</span><span class="auto-style5"> </span>
		<span class="style4">- </span></strong><font color="#FFFFFF"> <a class="style6" href="home.php">
		<span class="style4"><strong>joo</strong></span></a><span class="style4"><strong> - 
		</strong></span> <a href="sami.php" class="style6">
		<span class="style4"><strong>Tällee samille - </strong></span></a>
		<a href="chat.php" class="style6"><strong>
		<span class="style6">Chatti</span></strong></a></td>
	</tr>
	<tr>
		<td class="auto-style2" title="xqcL">
		&nbsp;<img alt="" height="102" src="xqc.gif" width="112" /><br />
		<img alt="" height="87" src="xqc1.gif" width="87" /><br />
		<br />
		<img alt="" height="201" src="xqc2.gif" width="727" /><br />
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
		<img alt="" height="101" src="BannerA.png" width="901" /></td>
<!-- lippis -->
	</tr>
</table>

<p class="style3">&nbsp;</p>
<p class="style3">&nbsp;</p>

</body>

</html>
