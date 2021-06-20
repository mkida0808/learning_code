<?php

require('../app/mysql_info.php');
require('../app/exception.php');

function getTodos($pdo) {
  $stmt = $pdo->query("select * from todos order by id desc");
  $todos = $stmt->fetchAll();
  return $todos;
}

$todos = getTodos($pdo);
var_dump($todos);
exit;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>My Todos</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>Todos</h1>
  <ul>
    <li>
      <input type="checkbox">
      <span>Title</span>
    </li>
    <li>
      <input type="checkbox" checked>
      <span class="done">Title</span>
    </li>
    <li>
      <input type="checkbox">
      <span>Title</span>
    </li>
  </ul>
</body>
</html>