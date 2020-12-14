<?php
  include("includes/db.php"); 
 ?>
<?php
   ob_start();                  

if ( isset($_POST['submit']) ){
$id = $_POST['id'];


$dname         = $_POST['dname'];
$email         = $_POST['email'];
// Encrypted Password


$phone        = $_POST['phone'];
$address      = $_POST['address'];
$dob      = $_POST['dob'];
// User Profile Picture Handle or Upload
$filename     = $_FILES['image']['name'];
$filetmp      = $_FILES['image']['tmp_name'];

move_uploaded_file($filetmp , "images/".$filename);
$room      = $_POST['room'];
$Password      = $_POST['Password'];

$query = "INSERT INTO `designer` (`designer_id`, `designer_name`, `designer_email`, `designer_phone`, `designer_location`, `designer_profile`, `designer_pass`, `designer_dob`, `room_name`) VALUES ($id, '$dname', '$email', '$phone', '$address', '$filename ', '$Password', '$dob', '$room')";
echo $query;

$add_new_designer = mysqli_query($conn, $query);
if ( !$add_new_designer ){
  die("Query Failed". mysqli_error($conn));
}
else{

header("Location: designers.php");
                      

                    }
              
                  }

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
    <link rel="stylesheet" type="text/css" href="css/adDesigner.css">
    <title>Add Designer</title>

    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
                  <li><a href="logout.php>">log Out</a></li>
                
                  <li>
                    <div class="dropdown drop">
                    <button class=" dropdown-toggle drop" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Designer
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="designers.php">Designers</a>
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
          <div class="col-9 ms">
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
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="row text-center">
                    <div class="col-md-12">
                      <h1 class="m">Add designer</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <form action="" method="POST" onsubmit="return validation()"class="bg-light" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="id">ID</label>
                          <input type="text" class="form-control" id="jk" aria-describedby="emailHelp" name="id">
                          <span id="userid" class="text-danger font-weight-bold"></span>

                        </div>
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="nm" aria-describedby="emailHelp" name="dname">
                           <span id="username" class="text-danger font-weight-bold"></span>

                        </div>
                        <div class="form-group">
                          <label for="name">Email</label>
                          <input type="email" class="form-control" id="em" aria-describedby="emailHelp" name="email">
                            <span id="eml" class="text-danger font bold"></span>

                        </div>
                        <div class="form-group">
                          <label for="name">Phone</label>
                          <input type="text" class="form-control" id="pn" aria-describedby="emailHelp" name="phone">
                           <span id="phn" class="text-danger font-weight-bold"></span>

                        </div>
                        <div class="form-group">
                          <label for="name">Address</label>
                          <input type="text" class="form-control" id="ae" aria-describedby="emailHelp" name="address">
                          <span id="add" class="text-danger font-weight-bold"></span>

                        </div>
                        <div class="form-group">
                          <label for="name">Date Of Bath</label>
                          <input type="date" class="form-control" id="db" aria-describedby="emailHelp" name="dob">
                           <span id="dbo" class="text-danger font-weight-bold"></span>
                        </div>
                        <div class="form-group">
                          <label>Profile Picture</label>
                          <input type="file" name="image" autocomplete="off" id="img"  accept="image/*">
                           <span id="imge" class="text-danger font-weight-bold"></span>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="pw" name="Password">
                          <span id="pass" class="text-danger font-weight-bold"></span>

                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">speciality</label>
                          <select id="romm" name="room" class="form-control">

                           <option value="dining">dining</option>
                           <option value="living">living</option>
                           <option value="office">office</option>
                           <option value="drowing">drawing</option>
                        </select>
                         
                        </div>
                        <input type="submit" class="btn btn-primary" value="submit"  name="submit">
                        
                      </form>
                        <script type="text/javascript">
  function validation(){
    var userid = document.getElementById('jk').value;
  var user = document.getElementById('nm').value;
  var mail = document.getElementById('em').value;
    var phone = document.getElementById('pn').value;
    var address = document.getElementById('ae').value;
     var DOB = document.getElementById('db').value;
     var image = document.getElementById('img').value;
    var password = document.getElementById('pw').value;
    if(userid ==""){
   document.getElementById('userid').innerHTML ="**please fill the user field";
    return false;
  }
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
   if(DOB ==""){
   document.getElementById('dbo').innerHTML ="**please set your Date of Birth";
    return false;
  }
   if(image ==""){
   document.getElementById('imge').innerHTML ="**please set a picture";
    return false;
  }
  if(password ==""){
    document.getElementById('pass').innerHTML ="**please provide a password";
    return false;
  }
  if(password.length<=7){
    document.getElementById('pass').innerHTML="**weak password";
    return false;
  }
  if(password.length >=15){
    document.getElementById('pass').innerHTML="**strong password";
    return false;
  }
  }
  </script>



                    </div>
                  </div>
                </div>
              </div>
            </div>   
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


 




