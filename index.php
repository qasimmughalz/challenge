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




	<div class="container my-5 ">
		<div class="row justify-content-center align-items-center">
			
			<div class="col-lg-10">
				<form>
					<div class="Section-A bg-light p-3">
					  <h4 class="my-3 font-weight-bold">A. BUSINESS INFORMATION <span class="additional">( To be completed by the Designated Official )</span></h4>
					  <div class="form-group">
					    <label for="LegalName"><span class="badge badge-dark mx-1">1</span>Legal Name</label>
					    <input type="text" class="form-control" >
					  </div>
					  <div class="form-group">
					    <label for="businessName"><span class="badge badge-dark mx-1">2</span>Business Name <span class="additional">( if different from legal name )</span></label>
					    <input type="text" class="form-control" id="exampleInputPassword1" />
					  </div>
					  <div class="form-group">
					    <label for="CivicAddress"><span class="badge badge-dark mx-1">3</span>Civic Address</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" />
					  </div>
					  <div class="form-group">
					    <label for="MailingAddress"><span class="badge badge-dark mx-1">4</span>Mailing Address</label>
					    <span class="additional">( if different from Civic Address )</span>
					    <input type="text" class="form-control" id="exampleInputPassword1" />
					  </div>
					 
					  <div class="form-group">
					  	<div class="form-row">
					     <div class="col">
					     	<label for="exampleInputPassword1"><span class="badge badge-dark mx-1">5</span>Telephone Number</label><span class="additional">( Include Extention no.if applicable )</span>
						      <input type="text" class="form-control" >
						 </div>
						 <div class="col">
						    	<label for="exampleInputPassword1"><span class="badge badge-dark mx-1">6</span>Fascimile Number</label>
						      <input type="text" class="form-control" >
						  </div>
					 	 </div>
						</div>	
					   <div class="form-group">
					    <label for="Email"><span class="badge badge-dark mx-1">7</span>Email</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" />
					 	</div>

					   <div class="form-group">
					    <p class="point8"><span class="badge badge-dark mx-1">8</span>Description of th controlled goods the appliacant may be required to examine, poesses or transfer <br> <span class="additional ml-4">( Refer to the Export Control List )</span></p>
					   
					   </div>

					  <div class="form-group">
					  	<div class="form-row align-items-center">
					  		<div class="col-8 text-center font-weight-bold">
					  			 <label>Description of Controlled Goods</label>
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <label>ECL Group <br>No.</label>
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <label>ECL Item <br>No.</label>
					  		</div>
					  	</div>
					  	<div class="form-row text-center align-items-center my-1">
					  		<div class="col-1">
					  			<label>a</label>
					  		</div>
					  		<div class="col-7 text-center font-weight-bold">
					  			<input type="text" class="form-control" >
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <input type="text" class="form-control" >
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <input type="text" class="form-control">
					  		</div>
					  	</div>
					  	<div class="form-row text-center align-items-center my-1">
					  		<div class="col-1">
					  			<label>b</label>
					  		</div>
					  		<div class="col-7 text-center font-weight-bold">
					  			<input type="text" class="form-control" >
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <input type="text" class="form-control" >
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <input type="text" class="form-control">
					  		</div>
					  	</div>
					  	<div class="form-row text-center align-items-center my-1">
					  		<div class="col-1">
					  			<label>c</label>
					  		</div>
					  		<div class="col-7 text-center font-weight-bold">
					  			<input type="text" class="form-control" >
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <input type="text" class="form-control" >
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <input type="text" class="form-control">
					  		</div>
					  	</div>
					  	<div class="form-row text-center align-items-center my-1">
					  		<div class="col-1">
					  			<label class="">d</label>
					  		</div>
					  		<div class="col-7 text-center font-weight-bold">
					  			<input type="text" class="form-control" >
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <input type="text" class="form-control" >
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <input type="text" class="form-control">
					  		</div>
					  	</div>
					  	<div class="form-row text-center align-items-center my-1">
					  		<div class="col-1">
					  			<label>e</label>
					  		</div>
					  		<div class="col-7 text-center font-weight-bold">
					  			<input type="text" class="form-control" >
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <input type="text" class="form-control" >
					  		</div>
					  		<div class="col-2 text-center font-weight-bold">
					  			 <input type="text" class="form-control">
					  		</div>
					  	</div>
					  </div>

					  </div>


					  <div class="Section B p-3 bg-light my-3">

					   <div class="form-group my-3">
					   	<h4 class="my-3 font-weight-bold">B. APPLICANT INFORMATION <span class="additional">( To be completed by the applicant )</span></h4>
					 	</div>
					 	<div class="form-group my-3">
					 		<label> <span class="badge badge-dark mx-1">9</span>Type of Application</label>

					 			<div class="form-row text-left pl-3 justify-content-center">
					 			<div class="col">
					 				<input type="radio" name=""> New
					 			</div>
					 			<div class="col">
					 				<input type="radio" name=""> Re-Assessment
					 			</div>
					 	</div>
					 	<div class="form-group my-3">
					 		<label> <span class="badge badge-dark mx-1">10</span>Business Title</label>
					 				<span class="additional">( Select All that Apply )</span>
					 		<div class="form-row text-left pl-3 justify-content-center">
					 			<div class="col">
					 				<input type="radio" name=""> Owner
					 			</div>
					 			<div class="col">
					 				<input type="radio" name=""> Authorized Individual
					 			</div>
					 			<div class="col">
					 				<input type="radio" name=""> Designated Official
					 			</div>
					 			<div class="col">
					 				<input type="radio" name=""> Officer
					 			</div>
					 		</div>
					 		<div class="form-row text-left pl-3 justify-content-center">
					 			<div class="col">
					 				<input type="radio" name=""> Director
					 			</div>
					 			<div class="col">
					 				<input type="radio" name=""> Employee
					 			</div>
					 			<div class="col">
					 				<input type="radio" name=""> New
					 			</div>
					 			<div class="col">
					 				<input type="radio" name=""> Re-Assessment
					 			</div>
					 		</div>
					 	</div>
					 	<div class="form-group my-3">
					 			
					 		<label> <span class="badge badge-dark mx-1">9</span>Preferred Language of Correspondence</label>
					 		<div class="form-row text-left pl-3 justify-content-center">
					 			<div class="col">
					 				<input type="radio" name=""> English
					 			</div>
					 			<div class="col">
					 				<input type="radio" name=""> French
					 			</div>
					 		</div>
					 	</div>

					 
					</div>
					</div>
					<div class="form-group text-center my-5">
					 <button type="submit" class="btn btn-primary" onclick="print()">Click to Print </button>
					</div>
					
				</form>
				</div>
				
		</div>

	</div>









	<!-- Script files should be in end - For faster reload of Html data  -->


	 <script src="js/scripts.js"></script>

	 <!-- Bootstrap Files  -->
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>

