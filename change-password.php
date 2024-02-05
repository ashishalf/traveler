<?php
session_start();
error_reporting(0);
include('includes/config.php');

	if (isset($_POST['submit'])) {
		$password = $_POST['currentPassword'];
		$newPassword = $_POST['newPassword'];
		$username = $_SESSION['email'];
		$sql = "SELECT password FROM users WHERE email=:username and password=:password";
		$query = $dbh->prepare($sql);
		$query->bindParam(':username', $username, PDO::PARAM_STR);
		$query->bindParam(':password', $password, PDO::PARAM_STR);
		$query->execute();
		$results = $query->fetchAll(PDO::FETCH_OBJ);
		if ($query->rowCount() > 0) {
			$con = "UPDATE users SET password=:newPassword WHERE email=:username";
			$chngpwd1 = $dbh->prepare($con);
			$chngpwd1->bindParam(':username', $username, PDO::PARAM_STR);
			$chngpwd1->bindParam(':newPassword', $newPassword, PDO::PARAM_STR);
			$chngpwd1->execute();
      echo "<script>
      alert('Password Changed Successfully 😊');
      window.location.href='profile.php';
      </script>";
		} else {
      echo "<script>
      alert('Current Password does not matched 😢😢😢');
      window.location.href='profile.php';
      </script>";
		}
	}
?>