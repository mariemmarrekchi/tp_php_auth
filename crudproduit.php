<?php
	session_start();
	if(isset($_SESSION['login']) and isset( $_SESSION["password"])){
    ?>
		<main>
		<?php  require_once("header.php") ?>
		<?php  require_once("main.php") ?>
		<?php require_once("footer.php") ?>
		</main>
<?php

	}
		else{
	?>
<?php
		$_SESSION['messageP']="vous ne pouvez pas connecter";
		header("location:login.php");

		}
	?>

		
           
		
	
	

	