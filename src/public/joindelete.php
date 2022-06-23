<?
$db = new PDO("sqlite:db/chat.sqlite");
        $db->exec("CREATE TABLE IF NOT EXISTS chat(
        id TEXT PRIMARY KEY,
        name TEXT, 
        message TEXT
)");
if (isset($_POST["code"]) && $_POST["code"] == "chat_delete_x") {
	$db->exec("DELETE FROM chat WHERE name='<sb>ReplChat [BOT]</sb>'");
}
if (isset($_POST["code"]) && $_POST["code"] == "chat_delete_xx") {
        $room2 = new PDO("sqlite:db/room2.sqlite");
        $room2->exec("CREATE TABLE IF NOT EXISTS chat(
        id TEXT PRIMARY KEY,
        name TEXT, 
        message TEXT
)");
	$room2->exec("DELETE FROM chat WHERE name='<sb>ReplChat [BOT]</sb>'");
}
	if (isset($_POST["code"]) && $_POST["code"] == "chat_delete_xxx") {
        $room2 = new PDO("sqlite:db/room3.sqlite");
        $room2->exec("CREATE TABLE IF NOT EXISTS chat(
        id TEXT PRIMARY KEY,
        name TEXT, 
        message TEXT
)");
	$room2->exec("DELETE FROM chat WHERE name='<sb>ReplChat [BOT]</sb>'");
}
?>
?>