
<?php
$dbserver="localhost";
$user="root";
$passwor="";
$db="yeildmart";


$connection=  mysqli_connect($dbserver,$user,$passwor,$db)or die("Unable to connect");
        $query="SELECT*FROM signup";
        
      $query_run=mysqli_query($connection,$query);
$_SESSION['id']=1;
      $sessionId=$_SESSION["id"];
      $user=mysqli_fetch_assoc(mysqli_query($connection,"SELECT*FROM signup WHERE id=$sessionId"));

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
 <head><link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/wprofile.css" rel="stylesheet" />
    <title>Yeild Mart</title></head>


    <style media="screen">
      .place{
  width: 213px;
  height: 208px;

  opacity: 1;
  position: absolute;
  top: 160px;
  left: 55px;
  border-radius: 50%;
}
    .upload{
      width: 140px;
      position: relative;
      margin: auto;
      text-align: center;
    }
    .upload img{
      border-radius: 50%;
      border: 8px solid gray;
      width: 200px;
      height: 200px;
      
    }
    .upload .rightRound{
      position: absolute;
      bottom: 0;
      right: 0;
      background: rgb(121, 238, 119);
      
      width: 40px;
      height: 40px;
      line-height: 43px;
      text-align: center;
      border-radius: 60%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .leftRound{
      position: absolute;
      bottom: 0;
      left: 0;
      background: red;
      width: 32px;
      height: 32px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .fa{
      color: white;
    }
    .upload input{
      position: absolute;
      transform: scale(2);
      opacity: 0;
    }
    .upload input::-webkit-file-upload-button, .upload input[type=submit]{
      cursor: pointer;
    }

    .v80_700{

width: 150px;
color: rgba(0,0,0,1);
position: absolute;
top: 109px;
left: 712px;
font-family: Montserrat;
font-weight: Medium;
font-size: 20px;
opacity: 1;
text-align: center;

}
.v80_463 {
  width: 500px;
  color: rgba(64,68,63,1);
  position: absolute;
  top: 100px;
  left:-70px;
  font-family: Montserrat;
  font-weight: Medium;
  font-size: 20px;
  opacity: 1;
  text-align: center;
}


.v80_465 {
  width: 500px;
  color: rgba(64,68,63,1);
  position: absolute;
  top: 125px;
  left: 60px;
  font-family: Montserrat;
  font-weight: Medium;
  font-size: 20px;
  opacity: 1;
  text-align: center;
}
.v80_466 {
  width: 500px;
  color: rgba(64,68,63,1);
  position: absolute;
  top: 110px;
  left: -5px;

  font-family: Montserrat;
  font-weight: Medium;
  font-size: 20px;
  opacity: 1;
  text-align: center;
}
.v80_467 {
  width: 500px;
  color: rgba(64,68,63,1);
  position: absolute;
  top: 120px;
  left: -15px;
  font-family: Montserrat;
  font-weight: Medium;
  font-size: 20px;
  opacity: 1;
  text-align: center;
}
.v236_48 {
  width: 344px;
  height: 403px;
  background: rgba(126,184,156,1);
  opacity: 1;
  position: absolute;
  top: 420px;
  left: 26px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  overflow: hidden;
}
</style>
    <body>
    
    <div class="v80_454"><a href=""><span class="v80_455">Home</a></span>
        <a href="cart.php"><span class="v80_456"> Orders</span></a>
        <a href=""><span class="v80_457">Contact Us</span></a>
        <a href=""><span class="v80_458">About</span></a>
        <a href="products.php"><span class="v80_700">View Products</span></a>
        <a href="logout.php"><span class="v80_459">Log out</span></a>
        <div class="place"> <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
      <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
      <div class="upload">
       
        <img src="img/<?php echo $user['image']; ?>" id = "image">

        <div class="rightRound" id = "upload">
          <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera"></i>
        </div>


          <i class = "fa fa-check"></i>
        </div>
      </div>
    </form>

    <script type="text/javascript">
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; // Back to previous image

        document.getElementById("cancel").style.display = "none";
        document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }
    </script>

    <?php
    if(isset($_FILES["fileImg"]["name"])){
      $id = $_POST["id"];

      $src = $_FILES["fileImg"]["tmp_name"];
      $imageName = uniqid() . $_FILES["fileImg"]["name"];

      $target = "img/" . $imageName;

      move_uploaded_file($src, $target);

      $query = "UPDATE signup SET image = '$imageName' WHERE id = $id";
      mysqli_query($conn, $query);

      header("Location: wprofile.php");
    }
    ?>
    
     <div class="name"></div><div class="name"></div>
        <div class="name"></div><div class="name"></div><div class="name"></div><div class="name"></div></div><div class="v236_48"></div><div class="v236_49"><div class="v236_50"><div class="v236_52"></div></div></div><div class="v236_53"></div><div class="v236_54"></div>
        <a href=""> <span class="v236_55">Notifications</span></a>
        <a href="update.php"><span class="v236_56">Update Profile</span></a>
        <a href="Reset.php"><span class="v236_57">Reset Password</span></a>
        <div class="v236_58"></div><span class="v236_59">PROFILE</span>
  </div>
        <div class="verticle"></div>
      
        <?php
            if($query_run)
            {
             
                   while($row=mysqli_fetch_array($query_run))
                   {
                    



        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        if($result = mysqli_query($conn, $query)) {

          $row = mysqli_fetch_assoc($result);
        echo "<span class='v80_462'><strong>Name: </strong> <span>".$row['name']."</span></div> <br>";
        echo "<span class='v80_463'><strong>UserName: </strong> <span>".$row['UserName']."</span></div><br>";
       
        echo "  <span class='v80_466'><strong>Address: </strong> <span>".$row['address']."</span></div><br>";
      
        echo " <span class='v80_467'><strong>Contact Number:</strong> <span>".$row['Phone_Number']."</span></div><br>";
        echo "  <span class='v80_465'><strong>Economic Center: </strong> <span>".$row['address']."</span></div><br>";
      } else {

        die("Error with the query in the database");

      }

    ?></div>
        <?php
                   }
                }
                else{
                 echo "No Recode Found";

                }
          
                ?>
       
       
       
       
      
      
      
      
      
      </div></body></html>