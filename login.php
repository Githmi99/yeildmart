<?php
$dbserver="localhost";
$user="root";
$passwor="";
$db="yeildmart";


$connection=  mysqli_connect($dbserver,$user,$passwor,$db)or die("Unable to connect");
if(isset($_POST['submit'])){
    $UserName=$_POST['UserName'];
    $pass=$_POST['pass'];

$select=mysqli_query($connection,"SELECT*FROM signup WHERE UserName ='$UserName' AND pass='$pass'");     
$row=mysqli_fetch_assoc($select); 


if(mysqli_num_rows($select)>0){

    $_SESSION["UserName"]=$row['UserName'];
    $_SESSION["pass"]=$row['pass'];
    header("Location:products.php");
   }
   else{
   
   
       echo 
        '<script> alert("Invalid UserName or Password");</script>'; 
      

      
   }
     }
  

?>


<!DOCTYPE html><html><head><link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
<link href="./css/login.css" rel="stylesheet" /><title>Yeild Mart</title>
</head>
<style>
 .button{
    background-color:rgba(0,0,0,0.19);
  color: black;
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
width: 190px;
  color: white
  position: absolute;
  top: 14px;
  left: 78px;
  font-family: Montserrat;
  font-weight: Medium;
  font-size: 20px;
  opacity: 1;
  text-align: center;
  transition-duration: 0.4s;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  overflow: hidden;
  }

.button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}


</style>
<body>
    <div class="v41_397"><span class="v41_399"><a href="">Contact Us</a></span>
    <span class="v41_400"><a href="">About</a></span>
    <span class="v41_398"><a href="index.php">Home</a></span>
    <div class="v61_580"><div class="v46_429"><div class="v46_408"></div>
    <a href=""><span class="v46_425">Forget Password</span></a>
    <a href="signup.php"><span class="v46_426">Creat New Account</span></a>
    <form action="login.php" method="POST">
    
    <span class="v46_417"><div class="input-box"><input name="UserName" id="UserName" placeholder ="UserName"autocomplete="off" required=""  ></input></div></span>
    
    <span class="v46_418"><div class="input-box"><input type="password" name="pass" id="pass" placeholder ="Password" autocomplete="off" required="" ></input></div></span>

    <div class="v46_424"><span class="v46_423"><input type="submit" name="submit" value="Login" class="button"></span></div>
</form>
    
    <div class="v126_22"></div></div><div class="v125_21"></div></div><div class="v61_581"><div class="v61_582"></div><div class="v61_583"></div></div>
    <div class="v61_584"></div><div class="v61_585"></div><div class="v125_20"></div></div>

<?php
 


?>



</body></html>