
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Start</title>
  <link rel="icon" href="images/modsy-icon.png" sizes="16x16" type="image/png">
   <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <!--theme css -->
  <link rel="stylesheet" type="text/css" href="css/registation.css">

</head>

<?php
  include("includes/db.php"); 
 ?>

<body>
  <form class="box" action="" method="POST" onsubmit="return validation()"class="bg-light" enctype="multipart/form-data">
    <div class="content">
      <span><a href="index.php"><img src="images/modsy-icon.png"></a><span>Welcome to Interior design expert system</span></span>
      
      
    </div>
    <h2>Start Your project</h2>
    <label id="user" >User Name</label>
    <input type="text" class="input" id="use" name="cname">
    <span id="username" class="text-danger font-weight-bold"></span>
    <label id="pass" >Email</label>
    <input type="email" name="email" placeholder="" id="emu" class="input"  >
    <span id="eml" class="text-danger font bold"></span>
    <label id="user" >Phone</label>
    <input type="text" class="input" id="phe" name="Phone">
    <span id="phn" class="text-danger font-weight-bold"></span>
    <label id="user" >Location</label>
    <input type="text" name="location" placeholder="" id="loc" class="input">
    <span id="add" class="text-danger font-weight-bold"></span>

     <label id="user" >Set Profile</label>
    <input type="file" name="image" autocomplete="off" id="img"  accept="image/*" class="input">
   <span id="imge" class="text-danger font-weight-bold"></span>

    <label id="user" >Password</label>
    <input type="password"  class="input" id="pw"  name="pass">
    <span id="pas" class="text-danger font-weight-bold"></span>
    <label id="user" >confirm Password</label>
    <input type="password"class="input" id="cpw"name="cpass">
    <span id="cpas" class="text-danger font-weight-bold"></span>
  
 
 <label id="user" >Which room are you designing?</label>
    <select id="cars" name="room" class="input">

        <option value="dining">dining</option>
        <option value="living">living</option>
        <option value="office">office</option>
        <option value="drowing">drawing</option>
    </select>

   
    
    <div class="">
      <input type="submit" name="submit" value="submit"  class="submit">
    </div>
    <a href="login.php" class="log">log in now</a>

  
                <?php
                      

                  if ( isset($_POST['submit']) ){
                    $cname           = $_POST['cname'];
                    

                    $email          = $_POST['email'];
                    $phone          = $_POST['phone'];
                    $location       = $_POST['location'];
                
               
                    // User Profile Picture Handle or Upload
                    $filename       = $_FILES['image']['name'];
                    $filetmp        = $_FILES['image']['tmp_name'];
                    $pass           = $_POST['pass'];
                    $room           = $_POST['room'];

                    move_uploaded_file($filetmp , "images/".$filename);
                
                    
                    $query = "INSERT INTO `client` (`client_name`, `client_email`, `client_phone`, `client_location`, `client_profile`, `client_pass`, `room_name`, `flag`) VALUES ('$cname', '$email', '$phone', '$location', '$filename', '$pass', '$room','0')";
                   

                    $add_new_client = mysqli_query($conn, $query);
                    if ( !$add_new_client ){
                      die("Query Failed". mysqli_error($connection));
                    }
                    else{

                      header("Location: registation.php");

                    }
              
                  }

                ?>




  </form>
    <script type="text/javascript">
    	
  function validation(){
  var user = document.getElementById('use').value;
  var mail = document.getElementById('emu').value;
    var phone = document.getElementById('phe').value;
     var address = document.getElementById('loc').value;
      var image = document.getElementById('img').value;
     var password = document.getElementById('pw').value;
    var cpassword = document.getElementById('cpw').value;
   
   
if(user ==""){
   document.getElementById('username').innerHTML ="**please fill the user field";
    return false;
  }
  if((user.length<=2)||(user.length>30)){
    document.getElementById('username').innerHTML="**user name length must be between 2 and 30";
    return false;
  }
  if(!isNaN(user)){
    document.getElementById('username').innerHTML="**only character are allowed";
    return false;
  }
  if(mail ==""){
    document.getElementById('eml').innerHTML ="**please enter your E-Mail";
    return false;
  }
  if(mail.indexOf('@')<=0){
    document.getElementById('eml').innerHTML ="**Invalid '@ 'position";
    return false;
  }
  if((mail.charAt(mail.length-4)!=
    '.')&&(mail.charAt(mail.length-3)!='.'))
  {
    document.getElementById('eml').innerHTML ="**Invalid 'dot'position";
    return false;
  }

  if(phone ==""){
    document.getElementById('phn').innerHTML ="**please enter your phone number";
    return false;
  }
  if(phone.length!=11){
    document.getElementById('phn').innerHTML="**Invalid mobile number,please enter valid one";
    return false;
  }
    if(address ==""){
    document.getElementById('add').innerHTML ="**please fill the address field";
    return false;
  }
  if(image ==""){
   document.getElementById('imge').innerHTML ="**please set a picture";
    return false;
  }
 
  if(password ==""){
    document.getElementById('pas').innerHTML ="**please provide a password";
    return false;
  }
  if(password.length<=7){
    document.getElementById('pas').innerHTML="**weak password";
    return false;
  }
  if(password.length >=15){
    document.getElementById('pas').innerHTML="**strong password";
    return false;
  }
  
  if(cpassword ==""){
    document.getElementById('cpas').innerHTML ="**please fill the confirm password field";
    return false;
  }
  if(cpassword!=password){
    document.getElementById('cpas').innerHTML="**password are not matching";
    return false;
  }
 

  }


</script>
</body>
</html>