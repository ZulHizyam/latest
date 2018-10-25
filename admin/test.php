<?php
    global $db;

    if(isset($_POST['vote'])){
        $vid            = $_POST['id'];
        $vcourse        = $_POST['course'];
        $vname          = $_POST['name'];
        $vstudid        = $_POST['stud_id'];
    
        
        $query = mysqli_query($db, "INSERT INTO votes (course,name, stuid) VALUES 
        ('$vcourse','$vname','$studid')");

         header("Location: ./voting_page.php");
    }
?>
