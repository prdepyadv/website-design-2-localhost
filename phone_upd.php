<?php
	session_start();
	$phone = $_POST["phone"];
    $username = $_SESSION["username"];

if(isset($phone) and isset($username)){

$host="127.0.0.1";$dbusername="root";$dbpassword="";$dbname="practice";

    $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
            $sql="UPDATE Test SET Phone = '".$phone."' WHERE username = '".$username."';";
					if($conn->query($sql))
						{
							echo true;
						}
					else
						{
						echo "Error: ".$sql."<br>".$conn->error;
						}
			$conn->close();
	}
	 die();
}
else{
echo "<script>window.location.replace('./index.php')</script>";
 die();
}
    
   	

?>
