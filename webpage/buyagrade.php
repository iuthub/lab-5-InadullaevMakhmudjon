<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<!-- GET METHOD -->
	<?php
		if($_SERVER["REQUEST_METHOD"]=="GET") { ?>
	
		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		
		<hr />
		
		<h2>Give Us Your Money</h2>

		<form method="post">
			
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name">
			</dd>
			
			<dt>Section</dt>
			<dd>
				<select>
					<optgroup label="(Select a selection)">
						<?php
							for($x=65; $x<73;$x++){ ?>
								<option name="<?= "M".chr($x) ?>"><?= "M".chr($x) ?></option>
						<?php } ?>
					</optgroup>
				</select>

			</dd>
			
			<dt>Credit Card</dt>
			<dd>
				<input type="text" enabled="false" name="creditCard">
			</dd>
			<dd>
				<input type="radio" name="Visa">Visa
				<input type="radio" name="MasterCard">MasterCard
			</dd>
		</dl>

			<input type="submit" value="I am a giant sucker.">
		
	</form>

	<?php
	} else { 
			$name = $_REQUEST["name"]; ?>

		<h1>Hello <span><?= $name ?></span> have successfully submited </h1>

		<?php } ?>
	</body>
</html>