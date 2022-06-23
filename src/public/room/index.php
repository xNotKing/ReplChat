<?
session_start();
if ($_SERVER["REQUEST_URI"] == "/room/1") {
	header("Location: ../chat.php");
}
if ($_SERVER["REQUEST_URI"] == "/room/2") {
	header("Location: 2.php");
}
if ($_SERVER["REQUEST_URI"] == "/room/3") {
	header("Location: 3.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ReplChat | Rooms</title>
	<meta name="keywords" content="replchat, replit chat, chat, replit's chat, php, replchat php, vapwastaken, xnotkingdev_, paradise, replit">
	<meta name="og:title" content="ReplChat">
	<meta name="og:type" content="site">
	<meta name="og:site_name" content="replchat">
	<meta name="og:description" content="Chat with other people">
	<meta name="og:image" content="Replchat.png">
	<meta name="theme-color" content="#1C2333">
	<link rel="icon" href="Replchat.png" type="image/png">
	<link rel="stylesheet" href="../css/authme.css" type="text/css">
</head>
<body>
	<style>
		h2 {
			text-align: center;
			font-size: 25px;
			margin-top: 25px;
		}
		a {
			color: #fff;
		}
	</style>
	<main>
		<h2>Rooms</h2>
		<ol>
		<li><a href="https://replchat.xnotking.repl.co/chat.php">Chat 1</a></li>
		<li><a href="https://replchat.xnotking.repl.co/room/2.php">Room 2</a></li>
		<!-- <li><a href="https://replchat.xnotking.repl.co/room/3">Room 3</a></li> -->
		</ol>
	</main>
</body>
</html>