<?php
session_start(); 

$username = $_POST['username']; 
$password = $_POST['password'];

$username = str_replace("'"," ",$username);
$password = str_replace("'"," ",$password);


if(isset($username) and isset($password))
{
	$host="127.0.0.1";$dbusername="root";$dbpassword="";$dbname="practice";
	$conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
			$sql_e = "SELECT password, id FROM Test WHERE username = '".$username."'";
			$result_e = mysqli_query($conn,$sql_e);
			$row = mysqli_fetch_assoc($result_e);
			$check = password_verify($password,$row["password"]);
			if($check == true)
			{
			$_SESSION["username"] = $username;
			$_SESSION["id"] = $row["id"];
			echo $check;
			die();
			}
		}

}
else
{
echo "<script>alert('error')</script>","<script>window.location.replace('./index.php')</script>";
}

    die();	

?>
