<?php
	session_start();

	function confirm_logged_in() {
		if(!isset($_SESSION['user_id'])){
			redirect_to("admin_login.php"); //if login is correct, sent to admin_login
		}
	}

	function logged_out() {
		session_destroy();
		redirect_to("../admin_login.php"); //log out, goes back to admin page
	}

?>
