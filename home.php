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
<head>
    <!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-158065780-1', 'auto');
ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics --><!-- End Google Analytics -->
		<meta charset="utf-8">
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a href="profile.php" class="style9"><strong><span class="auto-style1">Profile</span></strong></a>
				<strong><span class="auto-style1">|</span></strong>
				<a href="logout.php" class="style9"><i class="fas fa-sign-out-alt"></i>
				<span class="auto-style1"><strong>Logout</strong></span></div></a>
		</nav>
	</body>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Lippalakki kanko">
    <meta name="keywords" content="Lippalakki,Kanko,Aslakki,obamium,ungetiboa">
    <meta name="author" content="Aslakki">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="fi" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
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
	text-decoration: none;
	color: #FF0000;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.auto-style1 {
	color: #FF0000;
}
</style>
</head>

<body background="Background.jpeg">

<p class="style3">&nbsp;&nbsp;</p>

<table align="center" cellpadding="0" cellspacing="0" class="style1" style="width: 900px; height: 955px;">
	<tr>
		<td class="style3">
		<img alt="" height="101" src="BannerB.png" width="901" /></td>
	</tr>
	<tr>
		<td class="style2" style="height: 38px" color="#FFFFFF"><font color="#FFFFFF"></font><br />
		<a href="xqcl.php" class="style9"><strong><span class="style10">xqcL</span></strong></a> 
		<strong><span class="style8" style="height: 38px">- joo - </span>
		</strong> <a href="sami.php" class="style9"><strong>
		<span class="style10">Tällee samille - </span></strong></a>
		 <a href="chat.php" class="style9"><strong>
		<span class="style10">Chatti</span></strong></a></td>
	</tr>
	<tr>
		<td class="style3">
		<strong><span class="style10">KANKON ÄITE ON SIIVOUS HULLUST</span></strong><strong class="style5"><br class="style10" />
		</strong>
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br title="klonkku" class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<img alt="" height="276" src="Egyopt.gif" width="281"><br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br>
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<br class="style10" />
		<img alt="" height="101" src="BannerA.png" width="901" /><br class="style10" />
		</td>
	</tr>
	</table>

<p class="style3">&nbsp;</p>
<p class="style3">&nbsp;</p>

.auto-style1 {
	font-family: Gadugi;
	font-weight: bold;
	color: red;
}
</style>
</head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src=public_html/bootstrap/js/bootstrap.min.js"></script>
<script src=public_html/angular/angular.js"></script>
<script src=public_html/vue/vue.js"></script>

</body>
</html>
