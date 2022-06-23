<?php
if (isset($_SERVER["HTTP_X_REPLIT_USER_NAME"]) && $_SERVER["HTTP_X_REPLIT_USER_NAME"] != null) { include("chat.php"); die(); }
/*use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
define('LARAVEL_START', microtime(true));
if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}
require __DIR__.'/../vendor/autoload.php';
try {
$db = new PDO("sqlite:db/users.sqlite");

$db->exec("CREATE TABLE IF NOT EXISTS people(
        id TEXT PRIMARY KEY,
        name TEXT, 
       	password TEXT
			)");
} catch (PDOException $e) {
        echo $e->getMessage();
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ReplChat | Auth Me</title>
	<meta name="keywords" content="replchat, replit chat, chat, replit's chat, php, replchat php, vapwastaken, xnotkingdev_, paradise, replit, replchat.repl.co, replchatx.repl.co, replchat.xnotking.repl.co">
	<meta name="og:title" content="ReplChat">
	<meta name="og:type" content="website">
	<meta name="og:site_name" content="replchat">
	<meta name="title" content="ReplChat">
	<meta name="description" content="Chat with other people in Replit, fastly and safe.">
	<meta name="og:description" content="Chat with other people in Replit">
	<meta name="og:image" content="Replchat.png">
	<meta name="theme-color" content="#1C2333">
	<link rel="icon" href="Replchat.png" type="image/png">
	<link rel="stylesheet" href="css/authme.css" type="text/css">
</head>
<body>
	<script authed="location.reload()">
		let md = document.createElement("div")
		let mb = document.createElement("button")
		mb.className = "openFullScreen"
		md.className = "menu"
		mb.innerHTML = "Open Full Screen"
		md.innerHTML = `<p>
		Hold up!<br>
		ReplChat only works in full screen please click 'Open Full Screen' button to open.
		</p>`
	if (window.location == window.parent.location) {
		;(function() {
  // Util version
  var selem = document.currentScript;

  var button = document.createElement('button');
  button.className = "repl-auth";
	button.title = "Click to get authed"
  button.textContent = ' Login With Replit';

  if (location.protocol !== 'https:') {
    var err = document.createElement('div');
    err.className = "replit-auth-error";
    err.textContent = 'Replit auth requires https!';
    selem.parentNode.insertBefore(err, selem);
  }

  button.onclick = function() {
    // var authWindow = window.open('https://repl.it/auth_with_repl_site?domain=' + location.host)
    window.addEventListener('message', authComplete);

    var h = 500;
		var w = 350;
		var left = (screen.width / 2) - ( w / 2);
		var top = (screen.height / 2) - (h / 2);

    var authWindow = window.open(
      'https://repl.it/auth_with_repl_site?domain='+location.host,
      '_blank',
      'modal =yes, toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left)

    function authComplete(e) {
      if (e.data !== 'auth_complete') {
        return;
      }

      window.removeEventListener('message', authComplete);

      authWindow.close();
      if (selem.attributes.authed.value) {
        eval(selem.attributes.authed.value);
      } else {
        location.reload();
      }
    }
  }

  selem.parentNode.insertBefore(button, selem);
})()} else {
document.querySelector("body").innerHTML += ` 
	<div class="menu">
	<p>
		Hold up!<br>
		ReplChat only works in full screen please click 'Open Full Screen' button to open.
		</p>
		<div class="openFullScreen" onclick="window.open('https://replchat.xnotking.repl.co/')">Open Full Screen</div>
	</div>
`}
</script>
</body>
</html>
<?
/*	if (isset($_POST["username"])) {
			if ($_POST["password"] != "" && $_POST["username"] != "" && strlen($_POST["username"]) < 16 && strlen($_POST["username"]) > 3 && strpos($_POST["username"], '[') === false && strpos($_POST["username"], ']') === false && strpos($_POST["username"], '<') === false && strpos($_POST["username"], '>') === false && strpos($_POST["username"], ';') === false) {
			$name = htmlentities($_POST["username"]);
			$password = hash('ripemd160', $_POST["password"]);
			$id = uniqid(rand(11, 88), false);
			$rs = file_get_contents("registered.c");
			$try = strpos($rs, $name);
			if ($try === false) {
				$db->exec("INSERT INTO people VALUES ('{$id}', '{$name}', '{$password}')");
				$_SESSION["account"] = $name;
				$f = fopen("registered.c", "a");
				fwrite($f, "{$name}\n");
				print "<script>document.querySelector('php-I').innerText = 'You succesfully signed up'</script>";
				echo "<script>location.href = 'chat'</script>";
			} else {
				print "<script>document.querySelector('php-I').innerText = 'User already exists'</script>";
			}
		}
	}*/
?>