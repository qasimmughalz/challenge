<?php
class Records {
	public $legal_name = "CrowdApex Systems Inc";
	public $business_name = "CrowdApex";
	public $business_address = "290 Bremner Blvd, Toronto, ON M5V 3L9, Canada";
	public $business_mailing_address = " Wellington St, Ottawa, ON K1A 0A9, Canada";
	public $business_phone = "+1 647 944 3023"; 
	public $business_fax = "+1 647 944 3024";
	public $business_email = "hello@controlledgoods.com";
	public $application_type = "New";
	public $business_title = "Employee";
	public $lang = "English";
}
$controlledGoods = [
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],
	["Description"=>"Silly Product"		,"Group"=>345,"Item"=>321.0],
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],
	["Description"=>"Silly Product"		,"Group"=>345,"Item"=>321.0],
	["Description"=>'Miliatry Product'	,"Group"=>123,"Item"=>123.1],

];

$model = new Records();

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Security Screen</title>

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!-- Bootstrap 4 CDN - For faster loading -->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >


</head>

<body>


 
  	<!-- <?= $model->legal_name ?>  <br>

	<?php foreach($controlledGoods as $good): ?>

	<?= $good['Description'] ?> <?=$good['Group']?> <?=$good['Item']?> <br>

	<?php endforeach; ?>  -->




	









	<!-- Script files should be in end - For faster reload of Html data  -->


	 <script src="js/scripts.js"></script>

	 <!-- Bootstrap Files  -->
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>

