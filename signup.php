<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 1.2
* Author: Alexis Luna
* Copyright 2020 Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up | Start Bootstrap</title>

    <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">

    <style>
        .tab{
            display:none;
        }
        #signupBtn{
            display:none;
        }           
    </style>
    
</head>
<body>
    <div class="wrapper">
        <div class="auth-content" style="width:600px;">
            <div class="card">
              
                <!-- <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="assets/img/bootstraper-logo.png" alt="bootstraper logo">
                    </div>
                    <h6 class="mb-4 text-muted">Create a new account</h6>
                    -->
                   <div class="card-body text-left">
                    <form id="regForm" action="signup.php" method="POST">
                   
                        <?php include('registration/register.php') ?>
                        
                            <div class="tab">
                                <h4><span>Step 1 / 3</span><h4>
                                <h6 class="mb-4 text-muted">Personal Information</h6>
                                <hr>
                                <div class="form-row">                                  
                                    <div class="form-group col-sm-6">
                                        <label for="lastname">Last Name(Apelyido) *</label>
                                        <input type="text" name="lastname"class="form-control" required>                                   
                                    </div>
                                    <div class="form-group col-sm-6">
                                    <label for="firstname">First Name (Pangalan) *</label>
                                        <input type="text" name="firstname"class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="middlename">Middle Name</label>
                                        <input type="text" name="middlename"class="form-control" value=" ">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">Suffix (Ex. Jr. Sr. II. III)</label>
                                        <input type="text" name="suffix"class="form-control" value=" ">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">Nick Name</label>
                                        <input type="text" name="nickname"class="form-control" value=" ">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">Email Address *</label>
                                        <input type="text" name="email"class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">Contact Number *</label>
                                        <input type="text" name="contact"class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Gender *</label>
                                        <select name="gender" class="form-control" required>                                        
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Citizenship *</label>
                                        <select name="citizenship" class="form-control" required>                                           
                                            <option value="Filipino" selected>Filipino</option>
                                            <option value="American">American</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">Birthdate *</label>
                                        <input type="date" name="birthdate" class="form-control" required >
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="">Birth Place *</label>
                                        <input type="text" name="birthplace" class="form-control"required>
                                    </div>    
                                </div>
                                
                            </div> 
                            <div class="tab">
                                <h4><span>Step 2 / 3</span><h4>
                                <h6 class="mb-4 text-muted">Additional Information</h6>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="">Civil Status *</label>
                                        <select name="civilstatus" class="form-control" required>                                        
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">Education *</label>
                                        <select name="education" class="form-control" required>                                           
                                            <option value="Associate Degree Holder" selected>Associate Degree Holder</option>
                                            <option value="Bachelor Degree Holder">Bachelor Degree Holder</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">Work Status *</label>
                                        <select name="workstatus" class="form-control" required>                                           
                                            <option value="Government Employee" selected>Government Employee</option>
                                            <option value="Self Employed">Self Employed</option>
                                        </select>
                                    </div>     
                                    
                                    <div class="form-group col-sm-6">
                                        <label for="">Monthly Salary*</label>
                                        <input type="text" name="monthlysalary" class="form-control" required>   
                                    </div>

                                    <div class="form-group col-sm-12">
                                    <label for="">Occupation/Trabaho*</label>
                                        <input type="text" name="occupation" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                    <label for="">Company*</label>
                                        <input type="text" name="company" class="form-control" required>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="">Religions *</label>
                                        <select name="religion" class="form-control" required>                                        
                                            <option value="Roman Catholic">Roman Catholic</option>
                                            <option value="Muslim">Muslim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">Are you registered voter?</label>
                                        <select name="voter" class="form-control" required>                                           
                                            <option value="Yes" selected>Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">A person with disability?</label>
                                        <select name="pwd" class="form-control" required>                                           
                                            <option value="No" selected>No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="">Way of transportation?</label>
                                        <select name="transportation" class="form-control" required>                                           
                                            <option value="Private Car" selected>Private Car</option>
                                            <option value="Public Car">Public Car</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                
                            </div> 
                            <div class="tab">
                                <h4><span>Step 3 / 3</span><h4>
                                <h6 class="mb-4 text-muted">Additional Information</h6>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group-sm col-md-6">
                                        <label for="">Are you an informal Settler? *</label>
                                        <select name="q1" class="form-control" required>                                        
                                            <option value="Yes">Yes</option>
                                            <option value="No" selected>No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Do you have Electricity? *</label>
                                        <select name="q2" class="form-control" required>                                           
                                            <option value="Yes" selected>Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="q3">Have a clean water? *</label>
                                        <select name="q3" class="form-control" required>                                           
                                            <option value="Yes" selected>Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Residential Status *</label>
                                        <select name="residential_status" class="form-control" required>                                           
                                            <option value="Renting" selected>Renting</option>
                                            <option value="2">Option2</option>
                                        </select>
                                    </div>     
                                    
                                    <div class="form-group col-sm-6">
                                        <label for="">Residential Date *</label>
                                        <input type="date" name="residential_date" class="form-control" required>   
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Street *</label>
                                        <select name="street" class="form-control" required>                                           
                                            <option value="Cabrera Street" selected>Cabrera Street</option>
                                            <option value="2">Option2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">House Number *</label>
                                        <select name="house_number" class="form-control" required>                                           
                                            <option value="CS-1" selected>CS-1</option>
                                            <option value="CS-2">CS-2</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                    <label for="">House ID</label>
                                        <input type="text" name="house_id" class="form-control" value=" ">
                                    </div>
                                    <div class="form-group col-sm-6">
                                    <label for="">Subdivision/Purok/Sitio</label>
                                        <input type="text" name="subdivision" class="form-control" value=" ">
                                    </div>
                                    <div class="form-group col-sm-6">
                                    <label for="">Unit/Apartment Number/Floor</label>
                                        <input type="text" name="unit" class="form-control" value=" ">
                                    </div>

                                    <div class="form-group col-sm-12">
                                    <label for="">Username *</label>
                                        <input type="text" name="username" class="form-control" required>
                                    </div>

                                    <div class="form-group col-sm-6">
                                    <label for="">Password *</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>

                                    <div class="form-group col-sm-6">
                                    <label for="">Confirm Password *</label>
                                        <input type="password" name="cpassword" class="form-control" required>
                                    </div>
                                    
                                    
                                </div>
                                
                            </div>                      
                        <div>
                            <div style="float: left;">
                                <button class="btn btn-primary shadow-2 mb-4" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button class="btn btn-primary shadow-2 mb-4" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                <button class="btn btn-primary shadow-2 mb-4" name="reg_user"type="submit" id="signupBtn">Sign me up!</button>  
                            </div>
                        </div>
                    </form>
                    <br>
                    <p class="mb-0 text-muted text-right">Already have an account? <a href="index.php">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="assets/vendor/jquery3/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.min.js"></script>
    <script src="assets/js/form-validator.js"></script>
    <script src="js/registration.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>