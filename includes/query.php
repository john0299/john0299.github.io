<?php
        $id=$_SESSION['username'];
        $query=mysqli_query($db,"SELECT COUNT(*) AS 'count' FROM users") or die(mysqli_error());
        $query1=mysqli_query($db,"SELECT COUNT(*) AS 'renting' FROM users where residential_status='Renting'") or die(mysqli_error());
        $query2=mysqli_query($db,"SELECT COUNT(*) AS 'single' FROM users where civilstatus='Single'") or die(mysqli_error());
        $query3=mysqli_query($db,"SELECT COUNT(*) AS 'regVote' FROM users where voter='Yes'") or die(mysqli_error());
        $row=mysqli_fetch_array($query);
        $row1=mysqli_fetch_array($query1);
        $row2=mysqli_fetch_array($query2);
        $row3=mysqli_fetch_array($query3);
?>