<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>
<html>
	<head><meta charset="euc-kr">
    <!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-158065780-1', 'auto');
ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics --><!-- End Google Analytics -->
		
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a href="profile.php" class="style9"><strong><span class="auto-style1">Profile</span></strong></a>
				<strong><span class="auto-style1">|</span></strong>
				<a href="logout.php" class="style9"><i class="fas fa-sign-out-alt"></i>
				<span class="auto-style1"><strong>Logout</strong></span></a>
			</div>
		</nav>
	</body>
<head>
    
    <meta name="description" content="Lippalakki kanko">
    <meta name="keywords" content="Lippalakki,Kanko,Aslakki,obamium,ungetiboa">
    <meta name="author" content="Aslakki">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="fi" http-equiv="Content-Language" />

<title>LIPPIS</title>
<style type="text/css">
.style1 {
	background-color: #000000;
}
.style2 {
	text-align: center;
	border: 2px solid #000000;
}
.style3 {
	text-align: center;
}
.style5 {
	font-weight: normal;
}
.style8 {
	color: #FF0000;
	border: 2px solid #000000;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.style9 {
	text-decoration: none;
}
.style10 {
	color: #FF0000;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	text-decoration: none;
}
.auto-style1 {
	color: #FF0000;
}
</style>
</head>

<body background="Background.jpeg">

<p class="style3">&nbsp;&nbsp;</p>

<table align="center" cellpadding="0" cellspacing="0" class="style1" style="width: 98%; height: 95%;">
	<tr>
		<td class="style3">
		<img alt="" height="101" src="BannerB.png" width="100%" /></td>
	</tr>
	<tr>
		<td class="style2" style="height: 38px" color="#FFFFFF"> &nbsp;<br />
		<a class="style10"><span class="style10">xqcL - </span></a>
		<strong><span class="style10"><a class="style10" href="home.php">
		<span class="style10">joo</span></a></span></strong><a href="home.php" class="style10"><span class="style10"> 
		-</span></a>
		<a href="sami.php" class="style9"><strong>
		<span class="style10">Tällee samille - </span></strong></a>
		<span class="style10"><strong><a class="style10" href="chat.php">IRC Chatti</span></strong></span></td>
	</tr>
	<tr>
		<td class="style3">
		<span class="style10"></span></strong><strong class="style5"><br class="style10" />
		</strong>
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br title="klonku" class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<img alt="" height="102" src="xqc.gif" width="112" />
		<br>
		<img alt="" height="87" src="xqc1.gif" width="87" />
		<br>
		<img alt="" height="201" src="xqc2.gif" width="201" />
		<br>
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<img alt="" height="101" src="BannerA.png" width="100%" /><br class="style10" />
		</td>
	</tr>
	</table>

<p class="style3">&nbsp;</p>
<p class="style3">&nbsp;</p>

</body>
</html>
