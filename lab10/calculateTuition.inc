	<?php
			function DisplayOutput(){
				$hour=$_REQUEST["txtHours"];
				$residency=$_REQUEST["residency"];
				$rate=0;
				if($residency=="1"){
					
					$rate=144.04;
					$residencyStatus="In county";
				}	
				else if($residency=="2"){
					
					$rate=169.22;
					$residencyStatus="Out Of county";
				}	
				else if($residency=="3"){
					
					$rate=320.79;
					$residencyStatus="Out of state";
				}	
				$result=CalcTuition($hour,$rate);
				
			?>	
					<p>Your Residency Status: <?php print"$residencyStatus";?></p>
					
					<p>Credit Hours is: <?php print"$hour"?></p>
			
					<p> Your Tuition is: <?php print"\$$result";?></p>
					
			
		<?php	
			}
		
			function ValidateForm(){
				$valid=true;
				$hour=$_REQUEST["txtHours"];
				
				
				
				if (!is_numeric($hour) || ($hour<=0)||($hour>22)){
					$valid=false;
					print ("<p>$hour is not a valid number of credit hours, it must be a number between 1 and 22</p>");
					
				}
				
				
				return $valid;
			}
			?>