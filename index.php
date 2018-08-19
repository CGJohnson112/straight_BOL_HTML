<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript, jQuery">
  	<meta name="author" content="C.G. 'Caprice' Johnson">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<meta http-equiv="refresh" content="30">-->
	<title>BOL</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<!--jquery-->
	

</head>
<body>
<div class="container">
<img src="truck.jpg" alt="" />
<div class="head">

<h1>STRAIGHT BILL OF LADING</h1>
</div>

<form action="generate.php" method="POST">
<table class ='table table-bordered'>
	<tr>
		<th>SHIPPER NAME</th>
		<th>SHIPPER ADDRESS</th>
		<th>SHIPPER CITY</th>
		<th>SHIPPER STATE</th>
	</tr>
	<tr>
		<td><input type="text" class="form-control" name="ship_name"/></td>
		<td><input type="text" class="form-control" name="ship_addr"/></td>
		<td><input type="text" class="form-control" name="ship_city"/></td>
		<td><input type="text" class="form-control" name="ship_state"/></td>
	</tr>
</table>


<table class ='table table-bordered'>
	<tr>
		<th>CONSIGNEE NAME</th>
		<th>CONSIGNEE ADDRESS</th>
		<th>CONSIGNEE CITY</th>
		<th>CONSIGNEE STATE</th>
	</tr>
	<tr>
		<td><input type="text" class="form-control" name="cons_name"/></td>
		<td><input type="text" class="form-control" name="cons_addr"/></td>
		<td><input type="text" class="form-control" name="cons_city"/></td>
		<td><input type="text" class="form-control" name="cons_state"/></td>
	</tr>
</table>
<table class ='table table-bordered'>
	<tr>
		<th>SHIP DATE</th>
		<th>SHIPPER REFERENCE #</th>
		<th>POs</th>
		<th>BOL#</th>
		<th>DUE DATE</th>
		<th>CARRIER</th>
		<th>CARRIER PRO #</th>

	</tr>
	



	<tr>
		<td><input type="text" class="form-control" name="ship_date"/></td>
		<td><input type="text" class="form-control" name="ship_reference"/></td>
		<td><input type="text" class="form-control" name="ship_PO"/></td>
		<td><input type="text" class="form-control" name="BOL"/></td>
		<td><input type="text" class="form-control" name="ship_due_date"/></td>
		<td><input type="text" class="form-control" name="ship_carrier"/></td>
		<td><input type="text" class="form-control" name="ship_carrier_npro"/></td>
		
	</tr>
</table>




<table class ='text table table-bordered'>
<tr>
		<th></th>
		<th>PIECES</th>
		<th>DESCRIPTION</th>
		<th>WEIGHT</th>
		<th>CLASS</th>
		<th>NMFC#</th>
		<th>HAZMAT?</th>

	</tr>
	<tr>
		<td></td>
		<td><input type="text" class="form-control" name="pieces"/></td>
		<td><input type="text" class="form-control" name="descrip"/></td>
		<td><input type="text" class="form-control" name="weight"/></td>
		<td><input type="text" class="form-control" name="class"/></td>
		<td><input type="text" class="form-control" name="nmfc_no"/></td>
		<td><input type="text" class="form-control" name="hz"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>	
	<tr>
		<td>TOTALS</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>		


</table>

<table class='table table-bordered'>
	<tr>
		<th><label>COMMENTS</label></th>
	</tr>
	<tr>
		<td><textarea class="form-control" name="comments" id=""></textarea></td>
	</tr>

</table>


<table class='table table-bordered'>
	<tr>
		<th>SHIPPER SIGNATURE</th>
		<th>DATE</th>
		<th>TRAILER #</th>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>	
	</tr>

		<tr>
		<th>DRIVER SIGNATURE</th>
		<th>DATE</th>
		<th>SEAL #</th>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>	
	</tr>


</table>
<button type="submit" class="btn btn-success">Submit</button>
<button type="reset" class="btn btn-warning">Reset</button>
</form>
<br />
<div class="disclosure">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam fuga error rerum ut beatae, pariatur ea natus deleniti maxime veritatis perspiciatis excepturi facere eius eveniet quaerat, laudantium doloribus sunt, voluptate sint vel illum vitae.
</div>

<footer>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut eos esse ipsam ad illum! Repudiandae quia cumque aspernatur distinctio totam, delectus at nobis in maxime dolorem, aut voluptatibus temporibus fuga debitis dolore facere adipisci dolor.	

</footer>



</div><!--end container-->

	
	
</body>
<!-- Latest compiled and minified JavaScript -->


</html>


