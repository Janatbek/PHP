<?php
session_start();
require('new-connection.php');

if(isset($_POST['action']) && $_POST['action'] == 'register')
{
	//call to function and passing a real post variable
	register_user($_POST);

}

if(isset($_POST['action']) && $_POST['action'] == 'login')
{
	login_user($_POST);
}




// inside the function is just the name of the parameter
function register_user($post)
{
//-------------Begin Validation checks---------------------------------
	$_SESSION['errors']=array();

	// post info to be validated
	if(empty($post['first_name']))
	{
		$_SESSION['errors'][]="first name can't be blank!";
	}
	if(empty($post['last_name']))
	{
		$_SESSION['errors'][]="last name can't be blank!";
	}
	if(empty($post['password']))
	{
		$_SESSION['errors'][]="password field is required!";
	}
	if($post['password'] !== $post['confirm_password'])
	{
		$_SESSION['errors'][]="passwords must match!";
	}
	// validate email dont forget to put IF NOT!!!!because this function returns true
	if(!filter_var($post['email'],FILTER_VALIDATE_EMAIL))
	{
		$_SESSION['errors'][]="Please use valid email address";
	}
	
//------------------------End of validation checks---------------------
	if(count($_SESSION['errors'])>0)// if i have any errors at all
	{
		header('Location:index.php');
		die();
	}
	else // now you need to insert data into the database
	{
		$query="INSERT INTO users(first_name, last_name, email, password, created_at, updated_at) VALUES ('{$post['first_name']}','{$post['last_name']}','{$post['email']}','{$post['password']}', NOW(),NOW())";

		//to test if query works enter below code and test it 
		//echo $query;
		//die();

		run_mysql_query($query);
		$_SESSION['success_message']='User succesfully created!';
		header('Location:index.php');

	}
	
}
	
//------------------function below are for success.php file-------------


function login_user($post)
{

	$query="SELECT * FROM users WHERE users.password='{$post['password_login']}' AND users.email='{$post['email_login']}'";
	$user=fetch_all($query);
	if(count($user)>0)
	{
		$_SESSION['user_id']=$user[0]['id'];
		$_SESSION['first_name']=$user[0]['first_name'];
		$_SESSION['logged_in']=TRUE;
		header('Location: success.php');
	}
	else
	{
		$_SESSION['errors'][]= "cant find a user with those credentials";
		header('Location: index.php');
		die();
	}

}


//---------------------function for message
function post_message($post){
	$query="INSERT INTO messages(user_id,message, created_at, updated_at) VALUES ({$_SESSION['user_id']},'{$post['post_message']}', NOW(),NOW())";

		run_mysql_query($query);
		header('Location:success.php');
}

//---------------------function for comments---------------
function post_comment($post){
	$query="INSERT INTO comments(message_id,user_id,comment, created_at, updated_at) VALUES ('{$post['message_id']}','{$_SESSION['user_id']}','{$post['post_comment']}', NOW(),NOW())";

		run_mysql_query($query);
		header('Location:success.php');
}





//-------wait 
if(isset($_POST['action']) && $_POST['action'] == 'post_message')
{
	post_message($_POST);

}


//if(isset($_POST['action']) && $_POST['action'] == 'post_comment')
//{
	//post_comment($_POST);
//}
?>