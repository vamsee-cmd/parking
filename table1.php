<html>
<head>
<title>Jits parking OPAC</title>
<link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
<script src="./js/filters.js">
</script>
    </head>
<body bgcolor="black">
    <br>
    <section class="page-section" id="services">
    <div class="container">
    <input type="text" id="filter" class="form-control" placeholder="name" onkeyup="search()"><br>
<table class="table table-striped" id="myTable">
<tr>
<th>NAME</th>
<th>VEHICLE NO.</th>
<th>CHECK IN TIME</th>
<th>CHECKOUT</th>
</tr>
<tr>
<td>Siri Chandana</td>
<td>TS 09 H 3412</td>
<td>9:30am</td>
<td><input type="submit" name="checkout" class="btn-danger" value="checkout"></td>
</tr>

<tr>
<td>Suchithra</td>
<td>TS O8 F 8461</td>
<td>11:00am</td>
<td><input type="submit" name="checkout"  class="btn-danger" value="checkout"></td>
</tr>

<tr>
<td>Prabhashini</td>
<td>AP 02 G 5610</td>
<td>2:00pm</td>
<td><input type="submit" name="checkout" class="btn-danger"  value="checkout"></td>
</tr>

<tr>
<td>Sindhuja</td>
<td>TS 22 B 8933</td>
<td>3:30pm</td>
<td><input type="submit" name="checkout" class="btn-danger"  value="checkout"></td>
</tr>

<tr>
<td>Rithwika</td>
<td>TS 22 ED 3016</td>
<td>5:00pm</td>
<td><input type="submit" name="checkout" class="btn-danger"  value="checkout"></td>
</tr>

<tr>
<td>Sri Kavya</td>
<td>TS 21 F 4595</td>
<td>7:30pm</td>
<td><input type="submit" name="checkout" class="btn-danger"   value="checkout"></td>
</tr>
</table>
</div>
</section>
<?php include 'footer.php'; ?>