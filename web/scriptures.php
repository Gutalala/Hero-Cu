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

foreach ($db->query('SELECT  id, book, chapter, verse, content FROM Scriptures') as $row)
{
  echo 'id: ' . $row['id'];
  echo ' book: ' . $row['book'];
  echo ' chapter: ' . $row['chapter'];
  echo ' verse: ' . $row['verse'];
  echo ' content: ' . $row['content'];
  echo '<br/>';
}

?>