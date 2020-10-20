<?php
session_start();
include 'includes/pdoconfig.php';
    $username = "";
	$errors = array(); 
    $_SESSION['success'] = "";
     
    if (isset($_POST['login_user'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $stmt = $conn->prepare($query);
            // $stmt->bindParam($username,$password);
            $stmt->execute(array($query));

            $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($stmt->rowCount() > 0){

                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: dashboard.php');
            }
            else{ 
                array_push($errors, "<html><div class='alert alert-danger' role='alert'>Wrong username/password combination</div></html>");
                
             }
            		
		}
		
    }
?>
