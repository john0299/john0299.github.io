<?php
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'signup');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password']);
        $password_2 = mysqli_real_escape_string($db, $_POST['cpassword']);
		
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $suffix = mysqli_real_escape_string($db, $_POST['suffix']);
        $nickname = mysqli_real_escape_string($db, $_POST['nickname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $contact = mysqli_real_escape_string($db, $_POST['contact']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $citizenship = mysqli_real_escape_string($db, $_POST['citizenship']);
        $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
		$birthplace = mysqli_real_escape_string($db, $_POST['birthplace']);
		
        /////////tab2
        $civilstatus = mysqli_real_escape_string($db, $_POST['civilstatus']);
        $education = mysqli_real_escape_string($db, $_POST['education']);
        $workstatus = mysqli_real_escape_string($db, $_POST['workstatus']);
        $monthlysalary = mysqli_real_escape_string($db, $_POST['monthlysalary']);
        $occupation = mysqli_real_escape_string($db, $_POST['occupation']);
        $company = mysqli_real_escape_string($db, $_POST['company']);
        $religion = mysqli_real_escape_string($db, $_POST['religion']);
        $voter = mysqli_real_escape_string($db, $_POST['voter']);
        $pwd = mysqli_real_escape_string($db, $_POST['pwd']);
		$transportation = mysqli_real_escape_string($db, $_POST['transportation']);
		
        /////////tab3
        $q1 = mysqli_real_escape_string($db, $_POST['q1']);
        $q2 = mysqli_real_escape_string($db, $_POST['q2']);
        $q3 = mysqli_real_escape_string($db, $_POST['q3']);
        $residential_status = mysqli_real_escape_string($db, $_POST['residential_status']);
        $residential_date = mysqli_real_escape_string($db, $_POST['residential_date']);
        $street = mysqli_real_escape_string($db, $_POST['street']);
        $house_number = mysqli_real_escape_string($db, $_POST['house_number']);
        $house_id = mysqli_real_escape_string($db, $_POST['house_id']);
        $subdivision = mysqli_real_escape_string($db, $_POST['subdivision']);
        $unit = mysqli_real_escape_string($db, $_POST['unit']);



		// form validation
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		
		if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			// $password = $password_1;
			$query = "INSERT INTO users (firstname,middlename,lastname,suffix,nickname,email,contact,gender,citizenship,birthdate,birthplace,civilstatus,education,workstatus,monthlysalary,occupation,company,religion,voter,pwd,transportation,q1,q2,q3,residential_status,residential_date,street,house_number,house_id,subdivision,unit,username,password) 
					  VALUES('$firstname','$middlename','$lastname','$suffix','$nickname','$email','$contact','$gender','$citizenship','$birthdate','$birthplace','$civilstatus','$education','$workstatus','$monthlysalary','$occupation','$company','$religion','$voter','$pwd','$transportation','$q1','$q2','$q3','$residential_status','$residential_date','$street','$house_number','$house_id','$subdivision','$unit','$username','$password')";
            
            // $query = "INSERT INTO users (username,password,email,firstname)
            //  VALUES ('$username','$password','$email','$firstname')";

            mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: login.php');
            
            exit('You are now logged in!');
		}

    }/////////////////end of insert
    
    if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: dashboard.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
		
	}


?>