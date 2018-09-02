<!DOCTYPE html>
<html lang="en"> 
 <head>
     <meta charset ="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
     <title>Contact form</title>
     <link href="css/bootstrap-grid.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <style>
         h1{
             color: purple;
         }
         .contactForm{
             border: 1px solid grey;
             margin-top: 50px;
             border-radius: 15px;
             color: blue;
             background-color: aquamarine;
         }
         .form-control{
             background-color: burlywood;
             color: midnightblue;
         }
     </style>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
        
        <div class="col-sm-offset-1 col-sm-10 contactForm">
            <h1>Contact us</h1>
            
            <?php
            $name =$_POST["name"];
            $email =$_POST["email"];
            $message=$_POST["message"];
            
            $missingName='<p><strong>Please enter your name!!</strong></p>';
            
            $missingEmail='<p><strong>Please enter your email!!</strong></p>';
            
            $invalidEmail='<p><strong>Please enter a valid email address</strong></p>';
            
            
            $missingMessage='<p><strong>Please enter a message!!</strong></p>';
            
            
            if($_POST["submit"]){
                
                if(!$name){
                    $errors =$missingName;
                }else{
                    $name=filter_var($name,FILTER_SANITIZE_STRING);
                }
                 
                if(!$email){
                    $errors =$missingEmail;
                }else{
                    $email=filter_var($email,FILTER_SANITIZE_EMAIL);
                    
                    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $errors=$invalidEmail;
                    }
                }
            
               if(!$message){
                   $errors=$missingMessage;
               }else{
                   $message=filter_var($message,FILTER_SANITIZE_STRING);
               }
                
                
                if($errors){
                    
                    $resultMessage = '<div class="alert alert-danger">'. $errors.'</div>';
                    
                    
                }else{
                    $message ="
                    <p>Name: $name. </p>
                      <p>Email: $email. </p>
                        <p>Message: </p>
                        <p><strong>$message</strong></p>;
                    
                    
                    
                    
                    
                    ";
                    $to ="tussicha@yahoo.in";
                    $subject="contact";
                    $headers="Content-type:text/html";
                    if(mail($to,$subject,$message,$headers)){
                        $resultMessage ='<div class="alert alert-success"><h3>Thanks for your message.We will get back to ASAP.</h3></div>';
                        
                    }else{
                        $resultMessage ='<div class="alert alert-warning">Unable to send Email.Please try again later.</div>';
                    }
                }
                
                echo $resultMessage;
               } 
            
            
            
            
            
            
            
            
            
            ?>
            
            
            
            
            <form action="index3.php" method="post">
            <div class="form-group">
                <label for="name">
                Name:
                </label>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="<?php echo $_POST["name"];?>">
                </div>
                
                <div class="form-group">
                <label for="email">
                Email:
                </label>
                <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?php echo $_POST["email"];?>">
                </div>
                
            <div class="form-group">
                <label for="message">
                Message
                </label>
                <textarea name="message" id="message" class="form-control" rows="5">
                
                <?php echo $_POST["message"];?>
                </textarea>
                </div>
            <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Send Message">
            </form>
            </div>
        </div>
        
        </div>
        <script>
        $("#message").focus(function(){
 $(this).empty();
});
        
        </script>
    
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js">
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>