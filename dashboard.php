<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 1.2
* Author: Alexis Luna
* Copyright 2020 Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->


<?php include 'includes/header.php'; ?>

<body>
    <div class="wrapper">

        <?php include 'includes/sidebar.php'; ?>

        <div id="body" class="active">
            
            <?php include 'includes/navbar.php'; ?>
            
            <?php include 'includes/query.php'; ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">                
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="orange fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Number of Users</p>
                                                <span id ="getNum"class="number"><?php echo $row['count']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-envelope-open-text"></i> Active in the last 7 days
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="olive fas fa-home"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Number of Renting</p>
                                                <span class="number"><?php echo $row1['renting'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> In this current Month
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="violet fas fa-male"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Number of Single</p>
                                                <span class="number"><?php echo $row2['single'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> In this current Month
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="dodgerblue fas fa-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Registered Voter</p>
                                                <span class="number"><?php echo $row3['regVote'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> In this current Month
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