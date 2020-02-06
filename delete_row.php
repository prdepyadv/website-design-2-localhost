

<?php

session_start();
$username = $_SESSION["username"];
$id = $_POST["id"];
echo $id;
if(isset($username)){

$host="127.0.0.1";$dbusername="root";$dbpassword="";$dbname="practice";
    
    $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	    {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	    }
	else
		{
			$sql_e = "DELETE FROM Test WHERE id = '".$id."'";
			$result_e = mysqli_query($conn,$sql_e);
			mysqli_num_rows($result_e);
		}
}
else{
	echo "<script>window.location.replace('./index.php')</script>";
}
   
    die();	

?>
