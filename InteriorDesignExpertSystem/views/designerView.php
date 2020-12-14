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
  		<div class="container">
  			<div class="row">
  				
  				<div class="col-12">
  					<div class="row">
  						<header class="head">
  							<nav class="navbar navbar-expand-lg navbar-light m-auto">
					  			<a class="navbar-brand m-auto" href="#">DashBoard</a>
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
					          					<a class="dropdown-item" href="logout.php">Log OUt</a>
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
				                      $designer_location       = $row['designer_location'];
				                      $designer_dob      = $row['designer_dob'];
				                      $room_name       = $row['room_name'];
				                      $salary       = $row['salary'];
				                      $designer_profile       = $row['designer_profile'];
				                      
				         
				                  ?>
  						<div class="col-md-9">
  							

				                  <div>
				                  	<h1><span>ID :</span><?php echo $select_designer_id; ?></h1>
					                  <h1><span>Name :</span><?php echo $designer_name; ?></h1>
					                  <h1><span>Email :</span><?php echo $designer_email; ?></h1>
					                  <h1><span>Phone :</span><?php echo $designer_phone ; ?></h1>
					                  <h1><span>Address :</span><?php echo $designer_location ; ?></h1>
					                  <h1><span>Date Of Bath :</span><?php echo $designer_dob ; ?></h1>
					                  <h1><span>Specility :</span><?php echo $room_name  ; ?></h1>
					                  <h1><span>salary :</span><?php echo $salary  ; ?></h1>
					                 
				                  </div>
				                 

  						</div>
  						<div class="col-md-3">
  							<img src="images/<?php echo $designer_profile; ?>" class="img-fluid" style="height: 300px;width: 100%">
  						</div>
  						<?php
  						
  							}
  						}
  						 ?>
  				</div>
  				<div class="row">
  					<form action="" method="POST" enctype="multipart/form-data">
  						<div class="form-group">
                          <label> Picture Uploaded</label>
                          <input type="file" name="image" autocomplete="off" required="required" accept="image/*">
                        </div>
                        <input type="submit" class="btn btn-primary" value="submit"  name="submit">
  					</form>
  					<?php
                     

                  if ( isset($_POST['submit']) ){
         
                    
                    if ($room_name == "dining") {
                    	# code...
                    	$filename     = $_FILES['image']['name'];
		                    $filetmp      = $_FILES['image']['tmp_name'];

		                    move_uploaded_file($filetmp , "images/".$filename);
		                    
		                   
		                  
		                    $query = "INSERT INTO `dining_room` (`image`) VALUES ('$filename')";
		                    
		                    $add_new_designer = mysqli_query($conn, $query);
		                    if ( !$add_new_designer ){
		                      die("Query Failed". mysqli_error($conn));
		                    }
		                    else{

		                      

		                    }
              
                  }	
                  elseif ($room_name == "drowing") {
                  	$filename     = $_FILES['image']['name'];
		                    $filetmp      = $_FILES['image']['tmp_name'];

		                    move_uploaded_file($filetmp , "images/".$filename);
		                    
		                   
		                  
		                    $query = "INSERT INTO `drowing` (`image`) VALUES ('$filename')";
		                    

		                    $add_new_designer = mysqli_query($conn, $query);
		                    if ( !$add_new_designer ){
		                      die("Query Failed". mysqli_error($conn));
		                    }
		                    else{

		                      

		                    }
                  }
                  elseif ($room_name == "living") {
                  	$filename     = $_FILES['image']['name'];
		                    $filetmp      = $_FILES['image']['tmp_name'];

		                    move_uploaded_file($filetmp , "images/".$filename);
		                    
		                   
		                  
		                    $query = "INSERT INTO `living` (`image`) VALUES ('$filename')";
		                    

		                    $add_new_designer = mysqli_query($conn, $query);
		                    if ( !$add_new_designer ){
		                      die("Query Failed". mysqli_error($conn));
		                    }
		                    else{

		                      

		                    }
                  }
                  elseif ($room_name == "office") {
                  	$filename     = $_FILES['image']['name'];
		                    $filetmp      = $_FILES['image']['tmp_name'];

		                    move_uploaded_file($filetmp , "images/".$filename);
		                    
		                   
		                  
		                    $query = "INSERT INTO `office` (`image`) VALUES ('$filename')";
		                    

		                    $add_new_designer = mysqli_query($conn, $query);
		                    if ( !$add_new_designer ){
		                      die("Query Failed". mysqli_error($conn));
		                    }
		                    else{

		                     

		                    }
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
