<!doctype html>
<?php 
	include ("tuition.php");
	include ("calculateTuition.inc");
 ?>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lorain County Community College</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
		<script src="myScript.js"></script>
		
	</head>
		
	
	
	<body>
		
		<?php
			
			include ("header.inc");
			include ("nav.inc");
		?>

		
		<section>
			
			<h2>Calculate Your Tuition</h2>
			
			<?php

					DisplayForm();
					
			?>
			
			
		
		<?php
			include ("footer.inc");
			
		?>


	</body>

</html>
<?php
	function DisplayForm(){
		
?>
		<form 
							action="#" 
							method="get"
					>
						<label for="txtHours">Credit Hours</label>
						<input type="text" name="txtHours" id="txtHours">
						<label for="residency">Residency:</label>
							<select id="residency" name="residency" required>
								<option value="">None</option>
								<option value="In County">In County</option>
								<option value="Out Of County">Out of County</option>
								<option value="Out Of State">Out of State</option>
							</select>
						
						<input  type="button" value="Calculate" name="btnSubmit" onclick="getTuition();"/>
						</br>
						<span id="errors"></span>
						<span id="tuition">	
						</span>
						<noscript>You don't have JavaScript enabled</noscript>
						
					
					</form>
				</section>
<?php
	}
?>