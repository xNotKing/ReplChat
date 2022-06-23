<?php
if (!isset($_SERVER["HTTP_X_REPLIT_USER_NAME"]) || $_SERVER["HTTP_X_REPLIT_USER_NAME"] == null) {
	die("Forbidden access");
}
try {
        $db = new PDO("sqlite:../db/room2.sqlite");
        $db->exec("CREATE TABLE IF NOT EXISTS chat(
        id TEXT PRIMARY KEY,
        name TEXT, 
        message TEXT
)");
if (isset($_GET["replymessage"]) && isset($_GET["replyname"]) && strlen($_GET["replyname"]) > 1) {
	echo "<script>document.querySelector('.cm').value = 'Replying to {$_GET["replyname"]} ({$_GET["replymessage"]}): '</script>";
}
} catch (PDOException $e) {
        echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ReplChat</title>
	<meta name="keywords" content="replchat, replit chat, chat, replit's chat, php, replchat php, vapwastaken, xnotkingdev_, paradise, replit">
	<meta name="og:title" content="ReplChat">
	<meta name="og:type" content="site">
	<meta name="og:site_name" content="replchat">
	<meta name="og:description" content="Chat with other people in Replit">
	<meta name="title" content="ReplChat | Room 2">
	<meta name="description" content="Chat with other people in Replit">
	<meta name="og:image" content="Replchat.png">
	<meta name="theme-color" content="#1C2333">
	<link rel="icon" href="../Replchat.png" type="image/png">
	<link rel="stylesheet" href="../css/chat.css">
	<script src="https://kit.fontawesome.com/e4d71b6741.js" crossorigin="anonymous"></script>
		<script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
				<script defer>
					function scroll() {
	window.scrollTo(0, 50000);
}
scroll()
function ajax() {
	let req = new XMLHttpRequest();
	req.onreadystatechange = function () {
		if (req.readyState == 4 && req.status == 200) {
			document.querySelector(".comments").innerHTML = req.responseText;
		}
	}
	req.open('GET', "list2.php", true);
	req.send();
	scroll();
}
setInterval(function() {ajax()}, 1650)
function post() {
	$.post("create2.php",
  {
    comment: document.querySelector('.cm').value
  })
	document.querySelector('.cm').value = "";
	ajax();
}
$("*").keydown(function (event) {
	if (event.which == 13) {
		post();
	}
})
if (window.history.replaceState) {
	window.history.replaceState(null, null, window.location.href);
}
function botJoinDelete() {
	$.post("../joindelete.php",
  {
    code: "chat_delete_xx"
  })
}
				</script>
	</head>
	<body onload="ajax()">
		<nav>
			<h2> <div class="session"><a href="https://ReplChat.xnotking.repl.co/room/">Rooms</a>   <?= "<us>". $_SERVER["HTTP_X_REPLIT_USER_NAME"]. "<img src='https://repl.it/public/images/evalbot/evalbot_33.png' class='session-profile' alt='chat'></us>"?></div></h2>
			<img src="../Replchat.png" class="logoreplchat" alt="Replit">
		</nav>
				<!--- <form method="POST" class="comment-f"> -->
		<div class="form">
					<input type="text" name="comment" placeholder="Comment" class="cm" autocomplete="off">
					<button onclick="setTimeout(function (){post()}, 0)"><i class="fas fa-paper-plane"></i></button>
		</div>
				<!--- </form> -->
						<span class="comments"></span>
	</body>
</html>
<?
	if (isset($_GET["replyname"]) && isset($_GET["replymessage"])) {
		echo "<script>document.querySelector('.cm').value = 'Replying to ". htmlentities($_GET["replyname"]). " [". htmlentities($_GET["replymessage"]). "]: '</script>";
	}
	if (!isset($_GET["replymessage"]) && isset($_SESSION["account"])) {
	$joinid = uniqid(rand(399, 499), false);
	$db->exec("INSERT INTO chat VALUES ('{$joinid}', '<sb>ReplChat [BOT]</sb>', '<sb>{$_SESSION["account"]} went online</sb>')");
	echo "<script>setTimeout(function () {botJoinDelete()}, 1000)</script>";
}
?>