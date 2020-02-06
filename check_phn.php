<?php
session_start();
$username = $_SESSION["username"];
if(isset($username))
{
	$host="127.0.0.1";
	$dbusername="root";
	$dbpassword="";
	$dbname="practice";
        $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
			$sql_e = "SELECT * FROM Test WHERE username = '".$username."'";
			$result_e = mysqli_query($conn,$sql_e);
			$row = mysqli_fetch_assoc($result_e);
			if(! is_null ( $row["Phone"] ))
			{
				echo "./uploads/".$row["image_path"];
			}
		        else
			{
				echo 0;
			}
		}
   
}
else{
echo "<script>window.location.replace('./index.php')</script>";
}
die();	

?>
