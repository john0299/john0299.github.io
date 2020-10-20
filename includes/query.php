<?php
        // $id=$_SESSION['username'];
        // $query="SELECT COUNT(*) AS 'count' FROM users";
        // $query1="SELECT COUNT(*) AS 'renting' FROM users where residential_status='Renting'";
        // $query2="SELECT COUNT(*) AS 'single' FROM users where civilstatus='Single'";
        // $query3="SELECT COUNT(*) AS 'regVote' FROM users where voter='Yes'";
        // $row=$conn->query($query);
        // $row1=$conn->query($query1);
        // $row2=$conn->query($query2);
        // $row3=$conn->query($query3);

        // $user=$_SESSION['username'];
        $query="SELECT COUNT(*) AS 'count' FROM users";
        $query1="SELECT COUNT(*) AS 'renting' FROM users where residential_status='Renting'";
        $query2="SELECT COUNT(*) AS 'single' FROM users where civilstatus='Single'";
        $query3="SELECT COUNT(*) AS 'regVote' FROM users where voter='Yes'";
        if(strlen($_SESSION['username'])==0)
	{	
                $query = "";
                $query1 = "";
                $query2 = "";
                $query3 = "";
        }else{
                
        $stmt = $conn->prepare($query);
        $stmt1 = $conn->prepare($query1);
        $stmt2 = $conn->prepare($query2);
        $stmt3 = $conn->prepare($query3);

        $stmt->execute(array($query));
        $stmt1->execute(array($query1));
        $stmt2->execute(array($query2));
        $stmt3->execute(array($query3));

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
        $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
        }
       

        
        
?>