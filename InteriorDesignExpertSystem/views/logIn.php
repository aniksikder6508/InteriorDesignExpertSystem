<?php
  include("includes/db.php"); 
 ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Iog In</title>
 
  <link rel="icon" href="images/modsy-icon.png" sizes="16x16" type="image/png">
  


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <!--theme css -->
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
  <?php
session_start(); 
                      
$rs= "";
                  if ( isset($_POST['submit']) ){
                    $select         = $_POST['select'];
                    
                    
                    if ($select == "admin") {
                          # code...
                        $id         = $_POST['id'];
                        $name         = $_POST['name'];
                        $password         = $_POST['password'];
                        $query = "select * from admin where user_id = '$id' and user_name = '$name' and user_pass = '$password' ";
                        echo $query;
                        
                        $result = mysqli_query($conn,$query);
                        $count = mysqli_num_rows ( $result );
                        if ($count == 1) {
                          
                          # code...
                          $_SESSION["user_id"] = $id;
                          //header("location: admin.php");
                        }
                        else{
                          $rs =" invalid User name or password";
                        }
                        }
                        elseif ($select == "designer") {
                          $id         = $_POST['id'];
                          $name         = $_POST['name'];
                          $password         = $_POST['password'];
                          $query = "select * from designer where designer_id= '$id' and designer_name= '$name' and designer_pass = '$password' ";
                          
                          $result = mysqli_query($conn,$query);
                          $count = mysqli_num_rows ( $result );
                          if ($count == 1) {
                          # code...
                          
                          header("location: designerView.php?designer=$id");
                        }
                        else{
                          $rs =" invalid User name or password";
                        }
                        }
                        elseif ($select == "client") {
                          $id         = $_POST['id'];
                          $name         = $_POST['name'];
                          $password         = $_POST['password'];
                          $query = "select * from client where client_id= '$id' and client_name= '$name' and client_pass = '$password' ";
                          
                          $result = mysqli_query($conn,$query);
                          $count = mysqli_num_rows ( $result );
                          if ($count == 1) {
                          # code...
                            $query = "select * from client where client_id= '$id' and flag ='1'";
                            $result = mysqli_query($conn,$query);
                            $count_one = mysqli_num_rows ( $result );
                            if ($count_one == 1) {
                              # code...
                              header("location: clientView.php?Client=$id");
                            }
                            else
                            {
                              $rs ="pleae contact with admin You are not accepted";
                            }
                          
                        }
                        else{
                          $rs =" invalid User name or password";
                        }
                        }
                    
                       }                   
                       ?>
                       <?php
                      if(isset($_SESSION['user_id'])){
                      header("location: admin.php");
                      }
                      ?>

 
  <form class="box" method="POST" onsubmit="return validation() "class="bg-light">
    
    <div class="content">
      <span><a href="index.php"><img src="images/modsy-icon.png"></a>Interior design expert system</span></span>
      <h2>Welcome Back!</h2>
      <p>Enter your account credentials to view your space</p>
    </div>
     <select id="select" name="select" class="input">

    
          <option value="designer"> Doctor</option>
          <option value="client"> patient</option>
          <option value="admin"> admin</option>
        </select>
      <label id="user" >User Id</label>
    <input type="text" name="id"  class="input" id="up" >
    <label id="user" >User Name</label>
    <span id="userid" class="text-danger font-weight-bold"></span>

    <input type="text" name="name"  class="input" id="us" >
    <span id="username" class="text-danger font-weight-bold"></span>

    <label id="pass" >Password</label>
    <input type="password" name="password" placeholder="" class="input"  id="pa" >
  <span id="pass" class="text-danger font-weight-bold"></span>

    <div class="">
      <input type="submit" name="submit" value="log In"  class="submit">
    </div>
    <a href="registation.php">Registation Now</a>
    <?php 
    if ($rs!=="") {
      ?>
      
      <h1 style="color: red"><?php echo $rs; ?></h1>
      <?php
    }
     ?>
    
  </form>

<script type="text/javascript">
  function validation(){
    var userid = document.getElementById('up').value;
  var user = document.getElementById('us').value;
   var password = document.getElementById('pa').value;
   if(userid ==""){
    alert("please enter Your Id");
    return false;
  }
   if(user ==""){
    alert("please enter Your Name");
    return false;
  }
  if(password ==""){
    alert("please provide a password");
  
    return false;
  }
    }
</script>

</body>
</html>