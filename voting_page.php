<?php
//Include authentication
require("process/auth.php");

//Include database connection
require("./includes/connection.php");



?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="./css/styles.css" rel="stylesheet">
</head>
<body>
<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="homepage.php">Online Voting</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          
	                          <li><a href="index.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="homepage.php"><i class="glyphicon glyphicon-home"></i> Homepage</a></li>
                    <li class="current"><a href="voting_page.php"><i class="glyphicon glyphicon-ok"></i> Vote Candidates</a></li>
                    
                </ul>
             </div>
		  </div>
            
                        
      
<div class="voting-con">
        <div class="col-md-10">
            <div class="row">
      <div class="col-md-11">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
            <center><h4><b>List Of Nominees </b></h4></center><br><hr>
                <form action="" method="POST" role="form">
                <div class="table-responsive">
                <table class="table table-bordered table-condensed table-striped">
                    
            
                
                    <tr>
                        <th>Course</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Action</th>
                    </tr>   
                    
                    <tbody id="ptable">
                            <?php include("./vote_function.php") ?>
                        </tbody>
                    
                    
                     
                </table>
                   
            </div>
                </form>
                            </div>
        </div>
    </div>
</div>
    </div>
    </div>
            
            </div>
     

                    
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    
    <script src="./js/custom.js"></script>

</body>
</html>



<?php
if(isset($_POST['vote']) && isset ($_POST['voters_id'])){
    $vote=$_POST['vote'];
    $voters_id=$_POST['voters_id'];
    
    
    
    $query2="INSERT INTO votes (candidate_id,voters_id )VALUES ('$vote','$votersid')";
    header ("Location : /voting_page.php");
}

?>