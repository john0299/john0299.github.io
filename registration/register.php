<?php
session_start();

include 'includes/pdoconfig.php';

// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password_1 = $_POST['password'];
        $password_2 = $_POST['cpassword'];
		
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $suffix = $_POST['suffix'];
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $citizenship = $_POST['citizenship'];
        $birthdate = $_POST['birthdate'];
		$birthplace = $_POST['birthplace'];
		
        /////////tab2
        $civilstatus = $_POST['civilstatus'];
        $education = $_POST['education'];
        $workstatus = $_POST['workstatus'];
        $monthlysalary = $_POST['monthlysalary'];
        $occupation = $_POST['occupation'];
        $company = $_POST['company'];
        $religion = $_POST['religion'];
        $voter = $_POST['voter'];
        $pwd = $_POST['pwd'];
		$transportation = $_POST['transportation'];
		
        /////////tab3
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $residential_status = $_POST['residential_status'];
        $residential_date = $_POST['residential_date'];
        $street = $_POST['street'];
        $house_number = $_POST['house_number'];
        $house_id = $_POST['house_id'];
        $subdivision = $_POST['subdivision'];
        $unit = $_POST['unit'];

		// form validation
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		
		if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match"); }

		// register user if there are no errors in the form
		
		    $password = md5($password_1);//encrypt the password before saving in the database
            // $password = $password_1;
            
            try{
                $query = "INSERT INTO users (firstname,middlename,lastname,suffix,nickname,email,contact,
                gender,citizenship,birthdate,birthplace,civilstatus,education,workstatus,monthlysalary,
                occupation,company,religion,voter,pwd,transportation,q1,q2,q3,residential_status,
                residential_date,street,house_number,house_id,subdivision,unit,username,password) 
                VALUES('$firstname','$middlename','$lastname','$suffix','$nickname','$email','$contact',
                '$gender','$citizenship','$birthdate','$birthplace','$civilstatus','$education','$workstatus',
                '$monthlysalary','$occupation','$company','$religion','$voter','$pwd','$transportation',
                '$q1','$q2','$q3','$residential_status','$residential_date','$street','$house_number',
                '$house_id','$subdivision','$unit','$username','$password')";
      
            $stmt = $conn->prepare($query);
            $stmt->execute(array($query));
            //  $conn->exec($query);

            echo"<script>alert('Successfully register');</script>";
            }catch(PDOException $e) {
                echo $query . "<br>" . $e->getMessage();
              }
           
            
    }
    $conn = null;
?>