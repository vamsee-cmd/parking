<?php
require 'header.php';
?>
<div class="container">
    <br><br>
    <br><br>
    <br><br><form method="get" action="status.php">
    <input type="text" id="booking" placeholder="enter order id" name="ord" class="form-control" required><br>
    <div class="text-center"><input class="btn btn-primary text-uppercase" id="submitButton" type="submit"></div>
</form><br><br>
    <br><br>
    <br><br></div>
<?php
if(isset($_GET["ord"])){
    echo "yes";
}
require 'footer.php';
?>