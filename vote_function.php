<?php

global $db;
                                  

$query = "SELECT * FROM nominees";      

        
                $res= mysqli_query($db, $query);

                 while($row= mysqli_fetch_array($res)){
                     
                     
                      $id               =$row['id'];
                      $course           =$row['course'];
                      $name             =$row['name'];
                      $stud_id          =$row['stud_id'];
                      
                          echo "<tr>
	                                   
                                    <td>$course</td>
	                                <td>$name</td>
                                    <td>$stud_id</td>   
                                    <td><a href='./voting_page.php?vote={$id}&voters_id={$_SESSION['ID']}' button  type='button' class='btn btn-info'>Vote</button></a></td>    
                                       
                                </tr>";
                     
                
                 }
if(isset($_POST['vote']) && isset ($_POST['voters_id'])){
    $vote=$_POST['vote'];
    $voters_id=$_POST['voters_id'];
    
    
    
    $query2="INSERT INTO votes (candidate_id,voters_id )VALUES ('$vote','$voters_id')";
    header ("Location : ./voting_page.php");
}
                

?>



