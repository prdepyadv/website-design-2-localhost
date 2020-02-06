<?php

session_start();
$username = $_SESSION["username"];

if(isset($username))
{
	if($username == "prdepyadv")
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
					$sql_e = "SELECT image_path FROM Test";
					$result_e = mysqli_query($conn,$sql_e);
					while ($row = mysqli_fetch_assoc($result_e))
					{						
						echo "./uploads/".$row["image_path"]."\n";
					}
				}
	}	
}
else
{
	echo "<script>window.location.replace('./index.php')</script>";
}
?>
