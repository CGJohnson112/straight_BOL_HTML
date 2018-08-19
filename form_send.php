<?php
$ship_name = "Gucci Mane Fashions Inc";
$ship_addr = "555 Beverly Ave";
$ship_city = "Atlanta";
$ship_state = "GA";

$cons_name = "Walmart DC 1050";
$cons_addr = "1240 St Ge. Road";
$cons_city = "Lincoln";
$cons_state = "NE";

$ship_date = "12/06/2018";
$ship_reference = "5649543";
$ship_PO = "4323232";
$BOL = "5555555555";
$ship_due_date = "12/09/2018";
$ship_carrier = "Mom and Pop Transportation, Co of Arizona LLC ";
$ship_carrier_npro = "SV12232";

$pieces = "500";
$descrip = "Freight all kinds";
$weight = "34000";
$class = "dry";
$nmfc_no = "50";
$hz = "N";

?>

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
<table class ='table table-bordered'>
	<tr>
		<th>SHIPPER NAME</th>
		<th>SHIPPER ADDRESS</th>
		<th>SHIPPER CITY</th>
		<th>SHIPPER STATE</th>
	</tr>
	<tr>
		<td><?php echo $ship_name;?></td>
		<td><?php echo $ship_addr;?></td>
		<td><?php echo $ship_city;?></td>
		<td><?php echo $ship_state;?></td>
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
		<td><?php echo $cons_name;?></td>
		<td><?php echo $cons_addr;?></td>
		<td><?php echo $cons_city;?></td>
		<td><?php echo $cons_state;?></td>
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
		<td><?php echo $ship_date;?></td>
		<td><?php echo $ship_reference;?></td>
		<td><?php echo $ship_PO;?></td>
		<td><?php echo $BOL;?></td>
		<td><?php echo $ship_due_date;?></td>
		<td><?php echo $ship_carrier;?></td>
		<td><?php echo $ship_carrier_npro;?></td>
		<td></td>
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
		</td>
		<td></td>
		<td><?php echo $pieces;?></td>
		<td><?php echo $descrip;?></td>
		<td><?php echo $weight;?></td>
		<td><?php echo $class;?></td>
		<td><?php echo $nmfc_no;?></td>
		<td><?php echo $hz;?></td>
		
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
		<td><?php echo $pieces;?></td>
		<td></td>
		<td><?php echo $weight;?></td>
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
		<td><textarea name="" id="" cols="100" rows="10"></textarea></td>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>


