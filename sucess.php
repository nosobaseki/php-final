<?php
    // session_start();
    if(isset$_SESSION['loggedin']) || $_SESSION['logged'] == false){
	header("Location: index.php");

}


?>

<h2>You have logged in sucessfully</h2>