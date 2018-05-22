<?php

$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo '<h1>' . 'Scriptures Resources' . '</h1>';
echo '<br/>';

echo '<form>';
echo '<input type="text" size="30" onkeyup="showResult(this.value)">';
echo '<div id="livesearch"></div>';
echo '</form>';


foreach ($db->query('SELECT  book, chapter, verse, content FROM Scriptures') as $row)
{
  echo '<strong>' . $row['book'] . '</strong>';
  echo ' ';
  echo '<strong>' . $row['chapter'] . ':' . '</strong>';
  echo '<strong>' . $row['verse'] . '</strong>';
  echo ' - "' . $row['content'] . '"';
  echo '<br/>';
}

?>