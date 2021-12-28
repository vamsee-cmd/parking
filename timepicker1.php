

<!DOCTYPE html>
<html>
<head>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

</head>

<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LOGO</a>
  <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="#">Slot Booking</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Logout</a>
    </div>
  </div></div>
</nav>
    
<div class="container d-flex text-center">
    
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>                                             
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    minDate:new Date()
                });
            });
        </script>
        
<style>
body {
 background-image:url("car parking.jpg");
background-repeat: no-repeat;
background-attachment: fixed;
background-size:100% 100%;
}

.button {
width : 12%;
height :40px;
margin :40px;}

.block {
width : 4%;
height :25px;
margin :10px;

}
</style>


<input type="button" class=block name="A1" value="A1" style="background-color:white" disabled>
<input type="button" class=block name="A2" value="A2"  style=background-color:white >
<input type="button" class=block name="A3" value="A3"   style=background-color:grey >
<input type="button"class=block name="A4" value="A4" style=background-color:grey >
<input type="button" class=block name="A5" value="A5"  style=background-color:white>

<br>
<br>
<input type="button" class=block name="B1" value="B1"  style=background-color:white>
<input type="button" class=block name="B2" value="B2" style=background-color:white>
<input type="button" class=block name="B3" value="B3"  style=background-color:grey>
<input type="button" class=block name="B4" value="B4"   style=background-color:white>
<input type="button" class=block  name="B5" value="B5"   style=background-color:grey>
<br>
<br>
<input type="button" class=block name="C1" value="C1"  style=background-color:white>
<input type="button"  class=block name="C2" value="C2"  style=background-color:grey>
<input type="button" class=block name="C3" value="C3" style=background-color:white>
<input type="button" class=block name="C4" value="C4"  style=background-color:white>
<input type="button" class=block name="C5" value="C5"  style=background-color:white>
<br>
<br>
<input type="button" class=block name="D1" value="D1"  style=background-color:grey>
<input type="button" class=block name="D2" value="D2"  style=background-color:white>
<input type="button" class=block name="D3" value="D3"  style=background-color:white>
<input type="button" class=block name="D4" value="D4"  style=background-color:grey>
<input type="button" class=block name="D5" value="D5"   style=background-color:white>
<br>
<br>
<input type="button" class=block name="E1" value="E1"  style=background-color:white>
<input type="button" class=block name="E2" value="E2"  style=background-color:white>
<input type="button" class=block name="E3" value="E3"  style=background-color:grey>
<input type="button" class=block name="E4" value="E4"  style=background-color:white>
<input type="button" class=block name="E5" value="E5" style=background-color:grey >   

<br><br><br><br><br><br><br><br><br>
<?php require './footer.php'; ?>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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



</body>
</style>
</head>
  <!-- Add font awesome icons -->

  <a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-linkedin"></a>

</body>
</html>