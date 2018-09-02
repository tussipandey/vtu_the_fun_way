<!DOCTYPE html>
<html>
 <head>
     <link rel="stylesheet" type="text/css" href="styleindex.css">
     <meta charset ="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>VTU TUTORIALS</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    </head>
    <body>
        
          
        
        <div id="container">
            <div id="header">
            <div id="brand">
                <h1><img src="logo4.png"  alt="Smiley face" height="52" width="52" title="@tussipandeycreations"> <a href="#">VTU The Fun Way</a></h1>
                </div>
                <div id="searchbox"> 
                <!--     <form method="get"> -->
                    <input id="sub" type="text" class="text" title="Enter the name of subject" />
                   <!--<input type="submit" value="Search the Subject" class="submit"> 
-->
                     <button id="button" class="submit" onclick="checksub()">Search the subject</button>
                         <script>
                         var delayed= setTimeout(function(){window.alert("Welcome to our page.Please do register for further updates")},3000);</script>
                    
    <script>
        
        function checksub(){
           var subj= document.getElementById("sub") .value.toLowerCase();
        
        
        
           // if(subj=="DAA" )
            switch(subj){
            case "daa":
                   window.open("/Jan-2018%20(3).pdf");
                   break;
              // window.alert("Right Subject");
               //document.getElementById("par").innerHTML="<a //href="C:\Users\user\Desktop\web\MATH WEBSITE\Jan-2018 (3).pdf" //target="_blank">";
               //do cument.getElementById("par").innerHTML = "New text!";
                    case "me":
                   window.open("/Jan-2018%20(7).pdf");
                   break;
                     case "cn":
                   window.open("/Jan-2018%20(2).pdf");
                   break;
                    case "dbms":
                   window.open("/July-2017%20(7).pdf");
                   break;
                    case "mp":
                   window.open("/Jan-2018%20(4).pdf");
                   break;
                    case "ooc":
                   window.open("/Jan-2018%20(5).pdf");
                   break;
                    case "dc":
                   window.open("/Jan-2018%20(6).pdf");
                   break;
                      case "atc":
                   window.open("/AI_T1_SOL.pdf");
                   break;
                    
               default:
                 window.alert("Invalid subject");
        
            }
        }
                    </script>
               <!--     </form> -->
            </div>
                <div class="clear">
                    
                </div>
            </div>
            
          
            
            
            
            
            <div class="menu">
                <ul>
                    
                    
                    
                    
                    
                    
        
               
                <li><a href="#">Home</a></li>
                    <li><a href="#sidebarleft">Question Papers</a></li>
                    <li><a href="#sidebarright">Notes</a></li>
                    <li><a href="form4.php" target="_blank">Register</a></li>
                    <!-- <li><a href="quiz.html" target="_blank">Play Quiz</a></li>
-->
                     <li><a href="index3.php" target="_blank">Contact us</a></li>
                     <!--  
                    <li><button type="button" class="btn btn-primary" data-target="#myInquiry" data-toggle="modal" data-ordernumber="1122">
        Contact us
      </button>
                    
      <div class="modal" id="myInquiry" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Thank you for contacting us: 
              </h4>
          </div>
          <div class="modal-body">
            <label for="inquiry">
              Your inquiry:
            </label>
            <textarea class="form-control" rows="5" id="inquiry">
            </textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Close
            </button>
            <button type="button" id="bt" class="btn btn-primary">
              Send
            </button>
          </div>
      </div>
  </div>
  </div>
          -->          
                    
                    
                    
                    
                    
                    <li>
                      <div class="dropdown">
            
            <button class="dropdown-toggle btn btn-info" type="button" id="dropdownMenu" data-toggle="dropdown">
                Play Games
                <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                    <li role="presentation" > <a role="menuitem" href="quiz.html" target="_blank"> Math Quiz</a></li>
                    <li role="presentation" > <a role="menuitem" href="fruit3.html" target="_blank">Fruit Catch</a></li>
                </ul>
            </div>
                    </li>   
                </ul>
            </div>
           <div  id="intro"> 
         <a class="btn btn-default" href="#collapse01" data-toggle="collapse">
               <h1>Do you need help for VTU Exams?</h1>
             </a>
                <div class=" collapse" id="collapse01"><p>This site contains all the study materials required to ace the exams.We have previous years question papers and notes for respective subjects written accordingly by VTU experts.
                    Thank us later!!!!</p></div>
            </div>
            
            <div id="sidebarleft" class="sidebar">
                <h3>Question papers:</h3>
                <ul>
                <!--
                    <li><a href="/Jan-2018%20(7).pdf" target="_blank" id="me">MANAGEMENT AND ENTREPRENEURSHIP FOR IT INDUSTRY</a></li>
                    <li><a href="/Jan-2018%20(2).pdf" target="_blank">COMPUTER NETWORKS</a></li>
                    <li><a href="/July-2017%20(7).pdf" target="_blank">DATABASE MANAGEMENT SYSTEM</a></li>
                    <li><a href="/Jan-2018%20(4).pdf" target="_blank">MICROPROCESSORS AND MICROCONTROLLERS</a></li>
                    <li><a href="/Jan-2018%20(5).pdf" target="_blank">OBJECT ORIENTED CONCEPTS</a></li>
                    <li><a href="/Jan-2018%20(6).pdf" target="_blank">DATA COMMUNICATION</a></li>
-->
                    <li>
                        MANAGEMENT AND ENTREPRENEURSHIP FOR IT INDUSTRY 
                        <button type="button" class="btn btn-primary" id="button1"  data-loading-text="Downloading...." data-complete-text="Download Complete">
                        Download</button>
                    </li>
                     <li>
                        COMPUTER NETWORKS
                        <button type="button" class="btn btn-primary" id="button2"  data-loading-text="Downloading....">
                        Download</button>
                    </li>
                     <li>
                        DATABASE MANAGEMENT SYSTEM
                        <button type="button" class="btn btn-primary" id="button3"  data-loading-text="Downloading....">
                        Download</button>
                    </li>
                     <li>
                      MICROPROCESSORS AND MICROCONTROLLERS
                        <button type="button" class="btn btn-primary" id="button4"  data-loading-text="Downloading....">
                        Download</button>
                    </li>
                     <li>
                       OBJECT ORIENTED CONCEPT
                        <button type="button" class="btn btn-primary" id="button5"  data-loading-text="Downloading....">
                        Download</button>
                    </li>
                     <li>
                      DATA COMMUNICATION
                        <button type="button" class="btn btn-primary" id="button6"  data-loading-text="Downloading....">
                        Download</button>
                    </li>
                     
                </ul>
            </div>
            <div id="sidebarright" class="sidebar">
                <h3>More Features</h3>
                <ul>
                    
                    <li><a href="https://drive.google.com/folderview?id=1oP0nG1A4gLdmbYS3X3G1em2kKUGBJDvW" target="_blank">SEMESTER 5 BOOKS</a></li>
                    <li><a href="https://drive.google.com/open?id=1uBYeFI1AufgZ0wnyxd7kXJROTLJYLVeL" target="_blank">SEMESTER 5 INTERNAL PAPERS</a></li>
                    <li><a href="/cssyll5.pdf"target="_blank">SEMESTER 5 SYLLABUS</a></li>
                    <li><a href="/cse4syll.pdf" target="_blank">SEMESTER 4 SYLLABUS</a></li>
                    <li><a href="/ME_T1_SOL.pdf" target="_blank">MANAGEMENT AND ENTREPRENEURSHIP FOR IT INDUSTRY INTERNAL TEST 1</a></li>
                    <li><a href="" target="_blank">MP LAB MANUAL</a></li>
                    <li><a href="/AI_T1_SOL.pdf" target="_blank">AUTOMATA THEORY AND COMPUTABILITY INTERNAL TEST 1 </a></li>
                    <li><a href="C:\Users\user\Desktop\web\MATH WEBSITE\Data.Communications.and.Networking.5th.Edition.pdf" target="_blank">DC BOOK</a></li>
            
                </ul>
                
            </div>
            <div class="clear"></div>
            
            <footer class="footer" id="foot">
                <div>
                <p>tussipandey Copyright &copy 2018-2020</p>
                </div>
            </footer>
        </div>
         
        <script>
            $(function(){
                $("#bt").click(function(){
                    window.alert("Message Sent");
                    
                });
                    
                
                $("#intro").accordion({
                    collapsible :true
                });
                
                     });
        </script>
        <script>
            $(function(){
                $('#button1').click(function(){
                   $("#button1").html("Downloaded");
                    window.alert("Download the file");
                   window.open("/Jan-2018%20(7).pdf");
                    
            });
                $('#button2').click(function(){
                   $("#button2").html("Downloaded");
                    window.alert("Download the file");
                   window.open("/July-2017%20(7).pdf");
                    
            });
                $('#button3').click(function(){
                   $("#button3").html("Downloaded");
                    window.alert("Download the file");
                   window.open("/Jan-2018%20(7).pdf");
                    
            });
                $('#button4').click(function(){
                   $("#button4").html("Downloaded");
                    window.alert("Download the file");
                   window.open("/Jan-2018%20(4).pdf");
                    
            });
                $('#button5').click(function(){
                   $("#button5").html("Downloaded");
                    window.alert("Download the file");
                   window.open("/Jan-2018%20(5).pdf");
                    
            });
                $('#button6').click(function(){
                   $("#button6").html("Downloaded");
                    window.alert("Download the file");
                   window.open("/Jan-2018%20(6).pdf");
                    
            });
                });
        </script>
        <script>
            $(function(){
                $("#sub").tooltip({
                    show:{effect:"explode"}
                });
            });
        </script>
        <script>
            $(function(){
                $("#sub").autocomplete({
                    source:
                    ["AI","ME","CN","DAA","DC","DBMS","MP"]
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>