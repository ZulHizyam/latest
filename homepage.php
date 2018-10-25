<?php
require("./includes/connection.php");
require("navigation_stud.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Online Voting System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="./css/styles.css" rel="stylesheet">

  </head>
  <body>
      <h2><i>Welcome </i><strong><?php echo $_SESSION['NAME']; ?>!</strong></h2>
      <div class="col-md-10">
      <div class="row">
       <div class="col-md-11 panel-heading">
		  			<div class="content-box-header panel-heading">
                        <div class="panel-title "><h4><strong>INSTITUT LATIHAN PERINDUSTRIAN KUALA LUMPUR</strong></h4></div>
						
						
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<ul>
                        <h3><li></li></h3>
                        <h3><li></li></h3>
                        
                        </ul>  
						
					</div>
		  		</div>
   </div>
      
      <div class="row">
       <div class="col-md-11 panel-warning">
		  			<div class="content-box-header panel-heading">
                        <div class="panel-title"><h4><strong><i>Instruction</i></strong></h4></div>
						
						
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<ul>
                        <h3><li>Click <a href="voting_page.php">Vote Candidates</a></li></h3>
                        <h3><li>Click Vote to Vote Candidates</li></h3>
                        <h3><li>Finish & Logout</li></h3>
                        </ul>  
						
					</div>
		  		</div>
   
  
<div class="col-md-11">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
						</div>
		  				<video width="850" height="" autoplay loop>
<source src="../latest/includes/Ayy.MOV" type="video/mp4">

</video>
		  			</div>
		  		</div>

</div>
       </div>                     
  	
            
            
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="./vendors/morris/morris.css">

    <script src="./vendors/morris/morris.min.js"></script>
    <script src="./js/custom.js"></script>
    <script src="./js/stats.js"></script>
    </body>
</html>