<?php
	include("includes/db.php"); 
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/modsy-icon.png" sizes="16x16" type="image/png">
    



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- bootstrap font awesome cdn link -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- theme css -->
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <title>Designer</title>
  </head>
  <body>
  	<section class="admin">
  		<div class="container-fluid">
  			<div class="row">
  				<div class="col-3 nav-card">
  					<div class="card text-white   mb-3 img " style="width:100%; ">
				  		<div class="card-header">
				  			<div class="row">
				  				<div class="col-2">
				  					<img src="images/modsy-icon.png" class="img-fliud">
				  				</div>
				  				<div class="col-10">
				  					<span>Interior design expert system</span>
				  				</div>
				  			</div>
				  		</div>
				  		<div class="card-body body">
				    		<ul>
				    			<li><a href="admin.php">Dashbord</a></li>
				    		
					    		<li>
					    			<div class="dropdown drop">
								 		<button class=" dropdown-toggle drop" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  			 Designer
								  		</button>
								  		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    		<a class="dropdown-item" href="designers.php">Designers</a>
								    		<a class="dropdown-item" href="addDesigner.php">Add designer</a>
								    		
								  		</div>
									</div>
					    		</li>
					    		<li>
					    			<div class="dropdown drop">
								  		<button class=" dropdown-toggle drop" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								   			Client
								  		</button>
								  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    			
								    			<a class="dropdown-item" href="clients.php">Clients</a>
								  			</div>
									</div>
					    		</li>
					    		<li><a href="#">Service</a></li>
					    		<li><a href="#">contract</a></li>
					    		<li><a href="logout.php>">log Out</a></li>
					    	</ul>
						</div>
					</div>
  				</div>
  				<div class="col-9">
  					<div class="row">
  						<header class="head">
  							<nav class="navbar navbar-expand-lg navbar-light ">
					  			<a class="navbar-brand" href="admin.php">DashBoard</a>
					  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    			<span class="navbar-toggler-icon"></span>
					  			</button>

					  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
					    			<ul class="navbar-nav m-auto">
					      
					      				<li class="nav-item dropdown">
					        				<a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          					<i class="fa fa-user-o"></i>
					        				</a>
					        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          					<a class="dropdown-item" href="#">Log OUt</a>
					        				</div>
					      				</li>
					      
					    			</ul>
					  			</div>
							</nav>
  						</header>
  					</div>
  					<div class="row ">
  						<?php

				                  if (isset($_GET['designer'])){

                    					$designer_id = $_GET['designer'];
                    					
                    					$query = "SELECT * FROM designer WHERE designer_id = '$designer_id'";
                    					

                    					$select_designer = mysqli_query( $conn, $query);
				                    while( $row = mysqli_fetch_assoc($select_designer) ){

				                      $select_designer_id = $row['designer_id'];
				                      $designer_name         = $row['designer_name'];
				                      $designer_email     = $row['designer_email'];
				                      $designer_phone        = $row['designer_phone'];
				         
				                  ?>
  						<div class="col-md-6">
  							

				                  <h1><?php echo $select_designer_id; ?></h1>
				                  <h1><?php echo $designer_name; ?></h1>
				                  <h1><?php echo $designer_email; ?></h1>
				                  <h1><?php echo $designer_phone ; ?></h1>
				                 	<a href="designers.php?image=<?php echo $designer_id; ?>" class="btn btn-primary">See All Image</a> 
				                 

  						</div>
  						<div class="col-md-6">
  							
  						</div>
  						<?php
  						
  							}
  						}
  						 ?>
  				</div>
  				
  			</div>
  		</div>	
  	</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
