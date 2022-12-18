<?php
$dbserver="localhost";
$user="root";
$passwor="";
$db="yeildmart";


$connection=  mysqli_connect($dbserver,$user,$passwor,$db)or die("Unable to connect");
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $address =$_POST['address'];
    $phone_number =$_POST['Phone_Number'];
    $password =$_POST['pass'];
    $confirmpassword=$_POST['Confirm_Password'];
    $UserName=$_POST['UserName'];
    $duplicate=mysqli_query($connection,"SELECT * FROM signup WHERE UserName='$UserName' ");
   if(mysqli_num_rows( $duplicate)>0){
 echo "<script>alert('Username has already taken');</script>";

   }
   else{
if($password== $confirmpassword){
$query="INSERT INTO signup VALUES('',' $name',' $phone_number','$UserName','$password',' $address')";
mysqli_query($connection,$query);

echo
"<script>alert('Registration Successful');</script>";

}
else{
    echo
    "<script>alert('Password doesnot match');</script>";

}
   }
 
}




?>

<!DOCTYPE html>


<html>
    

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="./css/signup.css" rel="stylesheet" />
    <title>Yeild Mart</title>
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





<div class="v46_431"><span class="v46_434"><a href="">Home</a>
</span><span class="v46_435"><a href="">About</a>
</span>
<span class="v46_436"><a href="">Contact Us</a>
</span><div class="v46_517"><div class="v46_507">
    <div class="v46_458"><div class="v46_437"></div>
    <a href=""><span class="v46_456">Forget password</span></a>
    <a href="login.php"><span class="v46_457">Back to Login</span></a>
    <form action="signup.php" method="POST">
    <span class="v46_442"><div class="input-box"><input name="name" id="name" placeholder ="Name"autocomplete="off" required="" ></input>
</div></span>
<span class="v67_8"><div class="input-box"><input name="address" id="address" placeholder ="Address"autocomplete="off" required=""  ></input></div></span>
<span class="v46_443"><div class="input-box"><input type="password" name="Confirm_Password" id="Confirm Password" placeholder ="Confirm Password" autocomplete="off" required=""></input></div></span>
<span class="v46_444"><div class="input-box"><input type ="password" name="pass" id="Pass" placeholder ="Password" autocomplete="off" required=""></input></div></span>
    <span class="v46_445"><div class="input-box"><input name="Phone_Number" id="Phone Number" placeholder ="Phone Number" autocomplete="off" required="" ></input></div></span>
    <span class="v46_446"> <span class="v46_447"> <div class="input-box"><input name="UserName" id="UserName" placeholder ="UserName" autocomplete="off" required="" ></input></div></span>
    
           
    </input></div></span><div class="name"></div><div class="name"></div><div class="name"></div><div class="name"></div><div class="v46_455">
    <span class="v46_452"><input type="submit" name="submit" value="Create Account" class="button"></span></div>
    <div class="name"></div><div class="name"></div></div></div></div><div class="v131_28"></div><div class="v130_27"></div><div class="v129_26"></div><div class="v60_572">
        <div class="v60_569"></div>
    <div class="v60_571"></div></div><div class="v129_23"></div><div class="v129_24"></div><div class="v129_25"></div></div>
</form>

 
</body>
    
    </html>