<?php 
include("init.php");

if (isset($_POST['submit']))
   {

   	    $username = escape($_POST['username']);
   	    $password = escape($_POST['password']);


   	    if (empty($username) || empty($password)) {

   	    	$_SESSION['login'] = "One or more fields are empty";

   	    	header("Location: ../home.php?");
	        exit();
   	    }
   	    else
   	    {
   	    	$sql = "select * from users where username = '$username'";
   	    	$result = query($sql);
	        $row = row_count($result);

	        if($row < 1)
	        {
	          $_SESSION['login'] = "invalid username or password";
	          header("Location: ../home.php?login=error");
	          exit();
	        }

	        else
	        {
	        	if($row = mysqli_fetch_assoc($result))
	        	{
	        		$dehash = password_verify($password , $row['password']);

	        		if($dehash == false)
	        		{
	        			$_SESSION['login'] = "invalid Password";
	        			header("Location: ../home.php?login=error");
	          			exit();
	        		}

	        		else if($dehash == true)
	        		{
	        			$_SESSION['username'] = $row['username'];
	        			header("Location: ../class.php?login=success");
	                    exit();


	        		}

	        	}
	        }


   	    }

   	 }

else
{
	header("Location: ../home.php?login=error");
               exit();
}