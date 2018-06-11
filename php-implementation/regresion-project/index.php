<?php 
error_reporting();
function average ($value){
$totA = array_sum($value);
$banyakage = count($value);
$avg = $totA / $banyakage; 
return $avg;
}

$age = [39,47,45,47,65,46,67,42,67,56,64,56,59,34,42,48,45,17,20,19,36,50,39,21,44,53,63,29,25,69]; 
$bloodPressure = [144,220,138,145,162,142,170,124,158,154,162,150,140,110,128,130,135,114,116,124,136,142,120,120,160,158,144,130,125,175,];


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form>
<table align="center">
	<tr>
		<td align="center"><input type="text" name="prediksi" placeholder="masukkan umur"></td>
	</tr>
	<tr>
		<td align="center"><button name="Submit">Prediksi</button></td>
	</tr>
</table>
	
</form>
<div class="container">	
<table border="1" width="700"cellpadding="10" align="center">
<!-- age -->
<tr>
	<td>Age</td>
	<?php foreach ($age as $ages) {
	$hasil = $ages;
	?>
	<td><?= $hasil;?></td>
	<?php } ?>
	</tr>
<!-- age -->

<!-- bloodPressure -->
	<tr>
	<td>bloodPressure</td>
	<?php foreach ($bloodPressure as $bloods) {
	$hasil1 = $bloods;
	?>
	<td><?= $hasil1; ?></td>
	<?php } ?>
	</tr>
<!-- bloodPressure -->

	<!-- x-xbar -->
	<tr>
	<td>x-xBar</td>
	<?php foreach ($age as $ages) {
	$hasil = $ages - average($age);
	?>
	<td><?= number_format($hasil,3);?></td>
	<?php } ?>
	</tr>
	<!-- x-xbar -->

	<!-- y-ybar -->
	<tr>
	<td>y-yBar</td>
	<?php foreach ($bloodPressure as $bloods) {
	$hasil1 = $bloods - average($bloodPressure);
	?>
	<td><?= number_format($hasil1,3)	;?></td>
	<?php } ?>
	</tr>
	<!-- y-ybar -->
	<!-- A*B -->
	<tr>
		<td>A*B</td>
		<?php for($i=0; $i<count($age); $i++) { 
			$ab = ($age[$i]-average($age))*($bloodPressure[$i]-average($bloodPressure));

		?>
		<td><?= number_format($ab,3); ?></td>
		<?php } ?>
	</tr>
	<!-- A*B -->

	<!-- x-xbar -->
	<tr>
		<td>(x-xbar)^2</td>
		<?php for ($a=0; $a<count($age); $a++) { 
			$xMinXbar=($age[$a]-average($age));
		 ?>
		<td><?= pow(number_format($xMinXbar,3),2);?></td>
		<?php } ?>
	</tr>
	<!-- x-xbar -->
	<tr>
		<td>W1</td>
		
		<?php ?>
		<td></td>
	</tr>
</table>
</div>
</body>
</html>




