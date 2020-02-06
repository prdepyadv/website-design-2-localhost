<?php
session_start();
if(isset($_SESSION["username"])) {
    session_unset();
    session_destroy();
    exit;
}
else{
    echo "<script>window.location.replace('./index.php')</script>";
}
?>