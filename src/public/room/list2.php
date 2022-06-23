<?php
include '../plugins/Parsedown.php';
$parse = new Parsedown();
try {
        $db = new PDO("sqlite:../db/room2.sqlite");
        $db->exec("CREATE TABLE IF NOT EXISTS chat(
        id TEXT PRIMARY KEY,
        name TEXT, 
        message TEXT
)");
	// Banned users
$db->exec("DELETE FROM chat WHERE name='asdf'");
$db->exec("DELETE FROM chat WHERE message=''");
$result = $db->query("SELECT * FROM chat");
foreach ($result as $row) {
echo "<li onclick='$(`.cm`).val(`Replying to {$row["name"]} [{$row["message"]}]:`)'>";
echo "<img src='https://repl.it/public/images/evalbot/evalbot_33.png' alt='replchat'>{$row["name"]}<br>{$parse->text($row["message"])}<br>";
echo "</li>";
}
} catch (PDOException $e) {
        echo $e->getMessage();
}
?>