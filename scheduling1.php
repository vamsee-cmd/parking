<!DOCTYPE html>
<html>
   <head>
       <style>
            .fa {
                padding: 10px;
                font-size: 15px;
                width: 40px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
                border-radius: 50%;
                background:black;
                color:white;
            }
            .fa:hover {
                opacity: 0.7;
            }
            #loading{
  width: 100%;
  height: 100vh;
  background: #fff
  url('./assets/preloader.gif') no-repeat center;
  position: fixed;
  z-index: 99999;
}

       </style>
          
        <script>
          function stoppreloader(){
            var preloader=document.getElementById('loading').style.display="none";
          }
        </script>
    </head>
    <body onload="setTimeout(stoppreloader, 2000)">
<div id="loading"></div>
<br>
<div class="container">
    <div class="text-center">
    
        Date :
        <input id="txtdate" readonly="true" type="text">
        <br></br>
        <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
        <br></br>
                    </div>
<br><br>

        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from slots";
$result = $conn->query($sql);
$i=0;


  // output data of each row
  while($row = $result->fetch_assoc()) {
    $i++;
    echo '<div class="col-xs-2"><form method="POST" class="form-inline pull-left" action="bookslot.php?slot='.$row["slot"].'">';
   if($row['status']==='FREE')
   {
     echo '<input type ="submit" class="btn btn-primary btn-lg btn-block" value="'.$row["slot"].'"class="block">';

   }
   else{
    echo '<input type ="submit" class="btn btn-secondary btn-lg btn-block"  value="'.$row["slot"].'"class="block" disabled>'; 
   }
   if($i%6===0){
     echo"<br>";
   }
   echo '</form></div>';
  }
 
$conn->close();
?>
<br><br><br>

<?php require './footer.php'; ?>    
<div class="container">
    <div class="text-center">
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-linkedin"></a>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
           <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"type="text/css" />
          <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
           <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
           
                <script language="javascript">
                   $(document).ready(function () {
                   $("#txtdate").datepicker({
                         minDate: 0,
                         maxDate:"7d",
                         dateFormat: 'dd-mm-yy'
                     });
                     });
                </script>
    </body>  
</html>
     