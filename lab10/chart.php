<!DOCTYPE html>
<?php include ("tuition.php");?>
<HTML lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lorain County Community College</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
		
		
	</head>
	<body>
		<?php
			include("header.inc");
			include ("nav.inc");
		?>
		
			<section>
				<h2>Tuition and Cost </h2>
				<table>
					<thead>
						<tr>
							<th>Semester Credit Hours</th>
							<th>Lorain County Resident</th>
							<th>Out-of-County Resident</th>
							<th>Out-of-State Resident</th>
						</tr>
					</thead>
					</tbody>
						<?php
							for($hours=1;$hours <=22;$hours++)
								{
									$inCountyRate=144.04;
									$outOfCountyRate=169.22;
									$outOfStateRate=320.79;
						?>
						
							<tr>
								<td><?php print($hours); ?></td>
								<td><?php CalcTuition($hours,$inCountyRate);?></td>
								<td><?php CalcTuition($hours,$outOfCountyRate);?></td>
								<td><?php CalcTuition($hours,$outOfStateRate);?></td>
							</tr>
						<?php
								}
						?>
					</tbody>
				</table>
		</section>
		<?php
			include("footer.inc");
		?>
	</body>
	
	
</HTML>