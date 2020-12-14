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
    <title>Client</title>
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

				                  if (isset($_GET['Client'])){

                    					$client_id = $_GET['Client'];
                    					
                    					$query = "SELECT * FROM client WHERE client_id = '$client_id'";
                    					

                    					$select_client = mysqli_query( $conn, $query);
				                    while( $row = mysqli_fetch_assoc($select_client) ){

				                      $select_client_id = $row['client_id'];
				                      $client_name         = $row['client_name'];
				                      $client_email     = $row['client_email'];
				                      $client_phone        = $row['client_phone'];
				                      $client_location       = $row['client_location'];
				                      
				                      $room_name       = $row['room_name'];
				                      
				                      $client_profile       = $row['client_profile'];
				                      
				         
				                  ?>
  						<div class="col-md-9">
  							

				                  <div>
				                  	<h1><span>ID :</span><?php echo $select_client_id ; ?></h1>
					                  <h1><span>Name :</span><?php echo $client_name; ?></h1>
					                  <h1><span>Email :</span><?php echo $client_email; ?></h1>
					                  <h1><span>Phone :</span><?php echo $client_phone ; ?></h1>
					                  <h1><span>Address :</span><?php echo $client_location ; ?></h1>
					                 
					                  <h1><span>Design :</span><?php echo $room_name  ; ?></h1>
					                  
					                 
				                  </div>
				                 

  						</div>
  						<div class="col-md-3">
  							<img src="images/<?php echo $client_profile; ?>" class="img-fluid" style="height: 300px;width: 100%">
  						</div>
  						<?php
  						
  							}
  						}
  						 ?>
  				</div>
  				<div class="row">
  					<form action="" method="POST" enctype="multipart/form-data">
                        <input type="submit" class="btn btn-primary" value="Show all image"  name="submit">
  					</form>
 <?php
                     

                  if ( isset($_POST['submit']) ){
         
                    // User Profile Picture Handle or Upload
                    if ($room_name == "dining") {
                    	# code...
                    	?>

<table class="table">
<thead>
<tr>
  <th scope="col">Image</th>
 
</tr>
</thead>
<tbody>
	<?php
  $query = "select * from dining_room";
  $select_all_room = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($select_all_room)){
  $image = $row['image'];;
  ?>
  <td><img src="images/<?php echo $image ; ?>" class="img-fluid" style="height: 300px;width: 100%"></td>
   <?php
  }
  ?>
    
   
  </tbody>



                    	<?php
              
                  }
                  elseif ($room_name == "drowing") {
                  	?>

<table class="table">
<thead>
<tr>
  <th scope="col">Image</th>
 
</tr>
</thead>
<tbody>
	<?php
  $query = "select * from drowing";
  $select_all_room = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($select_all_room)){
  $image = $row['image'];;
  ?>
  <td><img src="images/<?php echo $image ; ?>" class="img-fluid" style="height: 300px;width: 100%"></td>
   <?php
  }
  ?>
    
   
  </tbody>

                  	<?php
                  }
                  elseif ($room_name == "living") {
                  	?>

<table class="table">
<thead>
<tr>
  <th scope="col">Image</th>
 
</tr>
</thead>
<tbody>
	<?php
  $query = "select * from living";
  $select_all_room = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($select_all_room)){
  $image = $row['image'];;
  ?>
  <td><img src="images/<?php echo $image ; ?>" class="img-fluid" style="height: 300px;width: 100%"></td>
   <?php
  }
  ?>
    
   
  </tbody>

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
