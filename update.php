<?php
session_start();
$dbserver="localhost";
$user="root";
$passwor="";
$db="yeildmart";


$connection=  mysqli_connect($dbserver,$user,$passwor,$db)or die("Unable to connect");
        $query="SELECT*FROM signup";
        
      $query_run=mysqli_query($connection,$query);
      require 'functions.php';
      $_SESSION['id']=1;
      $sessionId=$_SESSION["id"];
    

      if(isset($_POST['update'])) {

     
    
        $query = "UPDATE students SET firstname = '$fname', lastname = '$lname', course = '$course', yrlevel = '$yrlevel'
        WHERE id='".$_SESSION['userid']."'";
    
        if($result = mysqli_query($con, $query)) {
    
          $_SESSION['prompt'] = "Profile Updated";
          header("location:profile.php");
          exit;
    
        } else {
    
          die("Error with the query");
    
        }
    
      }
    
      
    
    

?>




<!DOCTYPE html><html><head><link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" /><link href="./css/update.css" rel="stylesheet" />
    <title>Yeild Mart</title>
</head>
<style>
.v70_122 {
  
  color: rgba(64,68,63,1);
  position: absolute;
  top: 400px;
  left:-24px;
  font-family: Montserrat;
  font-weight: Medium;
  font-size: 20px;
  opacity: 1;
  text-align: left;
}
.v237_78 {
  width: 324px;
  height: 398px;
  background: rgba(126,184,156,1);
  opacity: 1;
  position: absolute;
  top: 38px;
  left: -400px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  overflow: hidden;
}
select {
    position: relative;
    overflow: hidden;
    display: block;
    margin: auto;
    width: 330px;
    height: 100%;
    border-bottom: 0px;
    border-radius: 3px;
    font-size: 12px;
    box-shadow: 0px 1em 2em -1.5em rgba(0, 0, 0, .5);}
    .v70_87 {
  width: 150px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 81px;
  left: 546px;
  font-family: Montserrat;
  font-weight: Medium;
  font-size: 20px;
  opacity: 1;
  text-align: center;
}
.v70_86 {
  width: 75px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 81px;
  left: 792px;
  font-family: Montserrat;
  font-weight: Medium;
  font-size: 20px;
  opacity: 1;
  text-align: center;
}
</style>
<body><div class="v70_83"><a href=""><span class="v70_85">Home</span></a>
    <a href="cart.php"><span class="v70_86"> Orders</span></a>
    <a href="products.php"><span class="v70_87">View Products</span></a>
    <a href=""><span class="v70_88">Contact Us</span></a>
    <a href=""> <span class="v70_89">About</span></a>
        <a href=""> <span class="v70_90">Log out</span></a>
        <div class="verticle"></div>

        <div class="edit-form box-left clearfix">
      <form action="" method="POST">

   
          
          <?php 
           
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_row($result);

            
          ?>

        </div>
        
   


    <div class="v70_91"></div><div class="v70_93"><div class="v70_94"></div><div class="v70_95"></div></div><span class="v70_116" >
        <span class="v70_117"><div class="input-Box">Name<input name="name" id="name" autocomplete="off" require ></input></div></span>
        <span class="v70_118"><div class="input-Box">UserName<input name="UserName" id="name" autocomplete="off" require ></input></div></span>
        <span class="v70_120"><div class="input-Box">Address<input name="address" id="name" autocomplete="off"  ></input></div></span>
        <span class="v70_121"><div class="input-Box">Contact Number<input name="Phone Number" id="name" autocomplete="off"  ></input></div></span>
        <span class="v70_122"><div class="input-Box">Economic Center <select class="form-control" name="ecenter">
           
          </select></div></span>
        
        
        <div class="name"></div><div class="name"></div><div class="name"></div><div class="name"></div>
        <div class="sbutton"><button name="update">Save Changes</button></div>
      
            <div class="rbutton"><button>Remove Changes</button></div>
        <div class="v237_78"></div><div class="v237_82"></div><div class="v237_92"></div>
       
        <a href="wprofile.php"><span class="v237_85">View Profile</span></a><div class="v237_87"></div>
            <a href=""><span class="v237_88">Notifications</span></a>
                <a href="Reset.php"><span class="v237_89">Reset Password</span></a><div class="v237_90"></div>
<span class="v237_91">Update Profile</span></div>
<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>


    </body>
    </html>

    