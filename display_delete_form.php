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

<h1>Delete a message</h1>
<form method='POST' action='delete_record.php?id=<?php echo $id ?>'>    
	Delete message? <input name='msg' type='text' value='<?php echo $result['message'] ?>' disabled><br />
	<input name='msg' type="submit" value="Submit">
</form>
<form action="display_list.php">
    <input type="submit" value="Cancel"/>
</form>