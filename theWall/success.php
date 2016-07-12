<?php
session_start();
require('new-connection.php');
echo "Welcome {$_SESSION['first_name']} !";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Coding Dojo Wall</title>
	<style type="text/css">
		#name{
			font-weight: bold;
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
	<div id="container">
		<form action='process.php' method='POST'>
			<p>Post A message</p>
			<textarea name="post_message"></textarea>
			<div>
			<input type="hidden" name="action" value="post_message">
			<input type="submit" value="Post a message">
			</div>
		</form>
<?php
  $query2="SELECT users.first_name, users.last_name, messages.message, messages.created_at FROM messages JOIN users ON users.id = messages.user_id";

  $results=fetch_all($query2);

  foreach($results as $row)
  {
 ?>
	<p id="name"> <?=$row['first_name'] . " " . $row['last_name'] . " -" . $row['created_at']?> </p>
 	<p id="message">-<?=$row['message']?></p>
 	<form action='process.php' method='POST'>
		<p>Post A comment</p>
		<textarea name="post_comment"></textarea>
		<div>
		<input type="hidden" name="message_id" value="<?=$row['message.id']?>">			
		<input type="submit" value="Post a comment">
		</div>
	</form> 
 <?php
  }
?>
	</div>
</body>
</html>
		