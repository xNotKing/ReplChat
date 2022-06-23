<?php
if (!isset($_SERVER["HTTP_X_REPLIT_USER_NAME"]) || $_SERVER["HTTP_X_REPLIT_USER_NAME"] == null) {
	die("Forbidden access");
}
try {
$db = new PDO("sqlite:db/chat.sqlite");
        $db->exec("CREATE TABLE IF NOT EXISTS chat(
        id TEXT PRIMARY KEY,
        name TEXT,
        message TEXT
)");
if (isset($_POST["comment"]) && isset($_SERVER["HTTP_X_REPLIT_USER_NAME"])) {
$ns = preg_replace('/\s/u', '', $_POST["comment"]);
if (strlen($ns) > 1) {
  $id = uniqid(rand(11, 99), false);
  $bot = uniqid(rand(100, 199), false);
  $name = $_SERVER["HTTP_X_REPLIT_USER_NAME"];
  $comment = htmlentities($_POST['comment']);
  if (strlen($comment) <= 200 && strpos('nigga', strtolower($comment)) === false && strpos('niga', strtolower($comment)) === false) {
                $stm = $db->prepare("INSERT INTO chat VALUES (:id, :name, :message)");
                $stm->bindValue(':id', $id, PDO::PARAM_STR);
                $stm->bindValue(':name', $name, PDO::PARAM_STR);
                $stm->bindValue(':message', $comment, PDO::PARAM_STR);
                $stm->execute();
}
if (strpos($comment, "!help") === 0) {
        $db->exec("INSERT INTO chat VALUES ('{$bot}', 'ReplChat', '!credits :ReplChat credits')");
}
if (strpos($comment, "!credits") === 0) {
        $db->exec("INSERT INTO chat VALUES ('{$bot}', 'ReplChat', 'Owner & Developer: xnotkingdev_#6824')");
}
}
}
} catch (PDOException $e) {
        echo $e->getMessage();
}
?>