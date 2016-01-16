<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>DiceRoller</title>

	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<header class="main-header">
				<h1>Dice Roller</h1>
				<br>
				<h2>by Geoff</h2>
			</header>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<section id="dice_form">
				<header class="section-header">
					<h3>Dice form here</h3>
				</header>
				<article>
					<form>
						<table>
							<tr>
								<td><label for="dice_qty_1"># of<br>dice</label></td>
								<td><label for="dice_type_1">Dice Type</label></td>
							</tr>
							<tr>
								<td><input type="number" value="1" min="0" id="dice_qty_1" name="dice_qty_1"></td>
								<td>
									<select id="dice_type_1" name="dice_type_1">
										<option value="6">d6</option>
									</select>
								</td>
							</tr>
						</table>
						<input type="reset" value="Reset"> <input type="submit" value="Roll!">
					</form>
				</article>
			</section>
		</div>
	</div>
</div>
</body>
</html>