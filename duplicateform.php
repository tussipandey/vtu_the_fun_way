<html>


  <head>
      <link rel="stylesheet" type="text/css"
href="style1.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      
    <meta charset="utf-8">
    <title>Experiments</title>
        
    </head>
  <body>
      <?php
      
      $link = mysqli_connect("localhost","tussipan_tussi","tusharpandey", "tussipan_data") or die("ERROR :Unable to connect". mysqli_connect_error());
      
      echo "<p>Connected successfully to database</p>";
      
      
      
      
      ?>
       <?php
     if($_POST["register"]){  
      
      $missingUsername = '<p><strong>Please enter a username!</strong></p>';
 $missingEmail = '<p><strong>Please enter your email address!</strong></p>';
$invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';
$missingPassword = '<p><strong>Please enter a Password!</strong> </p>';
$missingPassword2 = '<p><strong>Please confirm your password</strong></p>';
      
      
if(empty($_POST["name"])){
    $error .=$missingUsername;
    
}else{
    $name = filter_var(
     $_POST["name"], FILTER_SANITIZE_STRING);
}
if(empty($_POST["email"])){
    $error .=$missingEmail;
    
}else{
    $email = filter_var(
     $_POST["email"], FILTER_SANITIZE_EMAIL);
         if(!filter_var(
     $email, FILTER_VALIDATE_EMAIL)){
             $error .=$invalidEmail;
}
      }
      
      if(empty($_POST["password1"])){
    $error .=$missingPassword;
      }else{
          $password = filter_var( $_POST["password1"], FILTER_SANITIZE_STRING);
          if(empty($_POST["password2"])){
    $error .=$missingPassword2;
      }else{
          $password2 = filter_var( $_POST["password1"], FILTER_SANITIZE_STRING);

      }
    
      }
    if($error){
        $resultmessage ='<div class ="alert alert-danger">' .$error. '</div>' ;
        echo $resultmessage;
        exit;
    }  
      
      
      
      
      
     
      
//  $name = $_POST['name'];
           // $email = $_POST['email'];
          //  $password = $_POST['password1'];
      $date =$_POST['date'];
      
      $tblnam ="stud";
      $name = mysqli_real_escape_string($link,$name);
       $email = mysqli_real_escape_string($link,$email);
       $password = mysqli_real_escape_string($link,$password);
      $password =hash('sha256',$password);
      
      $sql ="SELECT * FROM stud WHERE name ='$name'";
      $result =mysqli_query($link,$sql);
      if(!$result){
          echo '<div class="alert alert-danger">Error running the sql query!</div>';
          exit;
      }
      $results =mysqli_num_rows($result);
       if($results){
           echo '<div class="alert alert-danger">username already exists</div>';
           exit;
       }
      
      
      
      $sql ="SELECT * FROM stud WHERE email ='$email'";
      $result =mysqli_query($link,$sql);
      if(!$result){
          echo '<div class="alert alert-danger">Error running the sql query!</div>';
          exit;
      }
      $results =mysqli_num_rows($result);
       if($results){
           echo '<div class="alert alert-danger">The email already exists</div>';
           exit;
       }
      $activationKey = bin2hex(openssl_random_pseudo_bytes(16));
      
  
  

          
    $sql= "INSERT INTO stud (name,email,password,date,activation) VALUES ('$name' , '$email' ,'$password' , '$date','$activationKey')";

if(mysqli_query($link,$sql)){
    $resultmessage ='<div class="alert alert-success">Data Added succesfully to database </div>';
    echo $resultmessage;
}else{
    $resultmessage ='<div class="alert alert-warning"> Error in uploading database' .$sql. ' . '. mysqli_error($link).'</div>';
    echo $resultmessage;
}
        $message ="Please click on this link to activate your account: \n\n";
        $message .="http://tussipandey.thecompletewebhosting.com/activation.php?email=".urlencode($email)."&key=$activationKey";
        if(mail($email,'Confirm your Registration',$message, 'From:'.'
pandeytussi12@gmail.com')){
            echo "<div class ='alert alert-success'> Thanks for your registration !A confirmation email has been sent to $email .Please click on the activation link to activate your account.</div>";
            exit;
        }
         
        
        
      }
      
    ?>
      
      
      
      
      <?php
      if($_POST["register"]){
          $name=$_FILES["file"]["name"];
          $type=$_FILES["file"]["type"];
          $size=$_FILES["file"]["size"];
          $fileerror=$_FILES["file"]["fileerror"];
          $temp_name=$_FILES["file"]["tmp_name"];
          $permanentdestination="uploads/".$_FILES["file"]["name"];
          
          $nofileupload ="<p><strong>Please upload a picture</strong></p>";
           $fileexists ="<p><strong>Picture already exists</strong></p>";
           $wrongformat ="<p><strong>you can only use jpeg png jpg format</strong></p>";
           $filelarge ="<p><strong>Image should be less than 1 MB</strong></p>";
           
          $allowedformat = array("pdf"=>"application/pdf","text"=>"text/plain");
        
          if($fileerror!=0){
              $errors .= $nofileupload;
          }else{
              if(file_exists($permanentdestination)){
                  $errors .=$fileexists;
              }
              if($size > 3*1024*1024){
                  $errors .= $filelarge;
              }
              if(in_array($type,$allowedformat)){
                  $errors .= $wrongformat;
             }
           if($errors){
               $resultmessage = '<div class="alert alert-danger">'.$errors.'</div';
               echo $resultmessage;
           }else   {
               
               if(move_uploaded_file($temp_name,$permanentdestination)){
                   $resultmessage = '<div class="alert alert-success">Photo uploaded successfully</div>';
                   echo $resultmessage;
               }else{
                   $resultmessage = '<div class="alert alert-warning"> unable to upload the Photo</div>';
                   echo $resultmessage;
               }
           }
          }
          
      }
      
      
      ?>
      
        
      <h1 id="h">SIGNUP</h1>
        <form method="post" action="/duplicateform.php" enctype="multipart/form-data">
            <div class="form-group">
            <p>Enter your username </p>
        <input type="text" name="name" id="name" placeholder="name">
            </div>
            <div class="form-group">
            <p>Enter your mail</p>
        <input type="text" name="email" id="email" placeholder="email" class="form-control">
            </div>
            <p>Your password should contain atleast 6 characters and 1 number :</p>
            <p>Enter Password:<br />
        <input id="password1" type="password" name="password1">          
            </p>
        <p> Re-Enter Password:<br />
    <input id="password2" type="password" name="password2" >
       
            </p>
            <p>Enter Date Of Birth</p>
       <input id="date" name="date">   
      
             
      
          
       
            
      
          <p>Upload your Profile picture</p>
      <div class="form-group">
          <label for="file">Choose file:</label>
          <input type="file" name="file" id="file" placeholder="File">
      
          
          
          </div>
  <input type="submit" name="register" class="btn btn-success btn-lg"  id="submit" value="register" onclick="check()">
      
      
      </form>
     
          
           
       
        <p id="error"></p>
     
     

     <script>
         function check(){
             var password1 =document.getElementById("password1").value;
             var password2=document.getElementById("password2").value;
             var errorMessage = document.getElementById("error");
             var errorTOThrow = "";
             try{
                 if(password1.length<6){
                     errorTOThrow += "<br />Password too short";
                 }
                  //if(/[A-Z])/g.test(password1) == false ){
                     //errorTOThrow +="<br />Password should include //at least one capital letter";
                // }
                 if(/\d/g.test(password1) == false){
                      errorTOThrow +="<br />Password should include at least one digit";
                 }
                 if(password1 != password2){
                      errorTOThrow +="<br />Password didn't match";
                 }
                 if(/\d/g.test(password1) == true && password1 == password2){
                      errorTOThrow +="<br />Account Created";
                     window.alert("THANKS!!YOUR ACCOUNT HAS BEEN CREATED");
                 }
                    throw errorTOThrow;
                 
                 }
                     
                    catch(err){
                     errorMessage.innerHTML = err;
                 }
             
             }
             
         
         
         
      </script>
      
      
      
     
      
        <script>
          $(function(){
              $("#date").datepicker({
                  changeYear:true,
                  changeMonth:true,
                yearRange: '1945:'+(new Date).getFullYear()   ,   
                  showOn:"button",
                  buttonImage: "download1.png",
                  buttonImageOnly:true
                
              });
          });
      </script>
      
      
      
      
      
      
      
      
      
      
     
    </body>
</html>
