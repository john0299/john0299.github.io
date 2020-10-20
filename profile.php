<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 1.2
* Author: Alexis Luna
* Copyright 2020 Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">


<?php include 'includes/header.php'; ?>
<head>

</head>

<body>
    <div class="wrapper">
        
        <?php include 'includes/sidebar.php'; ?>

        <div id="body" class="active">
            
            <?php include 'includes/navbar.php'; ?>
            <?php
                $user=$_SESSION['username'];
                // $query=mysqli_query($db,"SELECT * FROM users where username='$id'") or die(mysqli_error());
                // $row=mysqli_fetch_array($query);
                $query = "SELECT * FROM users WHERE username='$user'";
                $stmt = $conn->prepare($query);
                $stmt->execute(array($query));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
         
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 mt-6">
                            <div class="card">
                                <div class="card-header text-center">
                                    Personal Information
                                </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-12">
                                            <div class="icon-big text-center">
                                                 <i class="teal fas fa-user"></i>                                              
                                            </div>
                                            <!-- <img src="img/haya.jpg" width="100%"> -->
                                        </div>
                                        <div class="col-sm-4 col-lg-12">
                                            <div class="detail text-left">
                                                <p>Full Name: <strong><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'] ?></strong></p>
                                                <p>Email: <strong><?php echo $row['email'] ?></strong></p>
                                                <p>Contact Number: <strong><?php echo $row['contact'] ?></strong></p>
                                                <p>Nickname: <strong><?php echo $row['nickname'] ?></strong></p>
                                                <p>Gender: <strong><?php echo $row['gender'] ?></strong></p>
                                                
                                                <p>Birthdate: <strong><?php echo $row['birthdate'] ?></strong></p>
                                                <p>Birthplace: <strong><?php echo $row['birthplace'] ?></strong></p>
                                                <p>Username: <strong><?php echo $row['username'] ?></strong></p>
                                                <p>Password: <strong><?php echo $row['password'] ?></strong></p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                            
                                </div>
                            </div>
                            
                        </div>

                          <div class="col-sm-12 col-md-12 col-lg-8 mt-6">
                            <div class="card">
                                <div class="card-header text-center">
                                    Additional Information
                                </div>
                                <div class="content">
                                    <div class="row">

                                        <div class="col-sm-3 col-lg-6">
                                            <div class="detail text-left">
                                                <p>Civil Status:<strong> <?php echo $row['civilstatus'] ?></strong></p>
                                                <p>Education:<strong> <?php echo $row['education'] ?></strong></p>
                                                <p>Work Status: <strong><?php echo $row['workstatus'] ?></strong></p>
                                                <p>Monthly Salary:<strong> <?php echo $row['monthlysalary'] ?></strong></p>
                                                <p>Occupation/Trabaho:<strong> <?php echo $row['occupation'] ?></strong></p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-lg-6">
                                            <div class="detail text-left">
                                            
                                                <p>Company: <strong><?php echo $row['company'] ?></strong></p>
                                                <p>Religion:<strong> <?php echo $row['religion'] ?></strong></p>
                                                <p>Registered voter:<strong> <?php echo $row['voter'] ?></strong></p>
                                                <p>Person with Disablity:<strong> <?php echo $row['pwd'] ?></strong></p>
                                                <p>Way of transportation:<strong> <?php echo $row['transportation'] ?></strong></p>  
                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-lg-6">
                                            <div class="detail text-left">
                                            
                                                <p>Informal Settler: <strong><?php echo $row['q1'] ?></strong></p>
                                                <p>Have Electricity:<strong> <?php echo $row['q2'] ?></strong></p>
                                                <p>Have a Clean Water:<strong> <?php echo $row['q3'] ?></strong></p>
                                                <p>Residential Status:<strong> <?php echo $row['residential_status'] ?></strong></p>
                                                <p>Residential Date:<strong> <?php echo $row['residential_date'] ?></strong></p>

                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-lg-6">
                                            <div class="detail text-left">
                                            
                                                <p>House Number: <strong><?php echo $row['house_number'] ?></strong></p>
                                                <p>House ID:<strong> <?php echo $row['house_id'] ?></strong></p>
                                                <p>Subdivision/Purok/Sitio:<strong> <?php echo $row['subdivision'] ?></strong></p>
                                                <p>Unit/Apartment Number/Floor:<strong> <?php echo $row['unit'] ?></strong></p>
                                            

                                            </div>
                                        </div>
                                    </div>
                                    
        
                                </div>
                            </div>
                            
                        </div>                       
                    </div>                                       
                </div>

               
            </div>
        </div>
    </div>

    <?php include 'includes/scripts.php'; ?>

</body>

</html>