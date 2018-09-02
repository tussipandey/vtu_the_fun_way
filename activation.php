<?php

      
      $link = mysqli_connect("localhost","tussipan_tussi","tusharpandey", "tussipan_data") or die("ERROR :Unable to connect". mysqli_connect_error());
      
      echo "<p>Connected successfully to database</p>";
      
      
      
      
    






?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset ="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1">
    <title>Account activation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1{
            color:purple;
        }
        .contactForm{
            border:1px solid grey;
            margin-top: 50px;
            border-radius: 15px;
        }
    
    </style>
    
    
    </head>


<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 contactForm">
        <h1>Account Activation</h1>
<?php
            if(!isset($_GET['email']) || !isset($_GET['key'])){
                 echo '<div class="alert alert-danger">Error!!!!!.please click on activation link recieved by email!</div>';
                exit;
}
            $email = $_GET['email'];
            $key = $_GET['key'];
            
            $email = mysqli_real_escape_string($link,$email);
            
            $key = mysqli_real_escape_string($link,$key);
            
            $sql = "UPDATE stud SET activation ='activated' WHERE (email='$email' AND activation='$key') LIMIT 1";
        $result = mysqli_query($link,$sql);
            if(mysqli_affected_rows($link)==1){
                echo '<div class="alert alert-success">Your Account has been created</div>';
                 echo '<a href="duplicateindex.php" type="button" class ="btn-lg btn-success">Log in</a>';
            }else{
                 echo '<div class="alert alert-danger">Your Account could not been created</div>';
                  echo '<div class="alert alert-danger">' .mysqli_error($link).'</div>';
            }
 ?>
        </div>
        
        
        </div>
    
    
    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
    
    </body>

</html>
     