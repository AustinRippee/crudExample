<?php
# This process deletes a record.

# 1. connect to database
require '../database/database.php';
$pdo = Database::connect();

$id = $_GET['id'] ;
$sql = "DELETE FROM messages WHERE id = " . $id;

# 4. remove the message in the database
$pdo->query($sql); # execute the query
echo "<p>Your info has been removed</p><br>";
echo "<a href='display_list.php'>Back to list</a>";