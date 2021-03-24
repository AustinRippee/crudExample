<?php
# connect to database
# show information for the chosen record in variable $results
require '../database/database.php';
$pdo = Database::connect();
$id = $_GET['id']; 
$sql = "SELECT * FROM messages WHERE id=" . $id;
$query=$pdo->prepare($sql); 
$query->execute(); 
$result = $query->fetch();
?>

<h1>Read/view existing message</h1>
<form method='post' action='display_list.php'>    
	message: <input name='msg' type='text' value='<?php echo $result['message']; ?>' disabled><br />    
	<input type="submit" value="Submit">
</form>