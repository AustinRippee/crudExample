<?php
# 1. connect to database
require '../database/database.php';
$pdo = Database::connect();

# 2. assign user info to a variable
$n = $_POST['msg'];

# 3. assign MySQL query code to a variable
$sql = "INSERT INTO messages (message) VALUES ('$n')";

# 4. insert the message into the database
$pdo -> query($sql); # execute the query

# 5. prompt user to return to list
echo "<p>Your info has been added</p><br>";
echo "<a href='display_list.php'>Back to list</a>";