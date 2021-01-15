<?php require_once ("common/header.php"); ?>

<body>
	<main>
		<div class="container-fixed">
		<h1>Superhero Sidekick Selection System</h1>
		<p>The League of Heroes. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

	
	<?php
		$error='';
		if (isset($_GET['error'])) {
			$error=$_GET['error'];
		};
	?>

	<?php if ($error=="user_name_missing") { ?>
			<div class="alert">
			<p>Sorry, we can't turn you into a crime-fighting sidekick without all of the information. Try again!</p>
		</div>
	<?php } ?>

	<?php if ($error=="user_bio_missing") { ?>
			<div class="alert">
			<p>Sorry, we can't turn you into a crime-fighting sidekick without all of the information. Try again!</p>
		</div>
	<?php } ?>
	
		<form action="step_two.php" method="post">
				<div class="input-row">
					<label for="first_name">Sidekick Name:</label>
					<input type="text" name="user_name" id="first_name" placeholder="Enter your first name">
				</div>
				<div class="input-row">
					<label for="first_name">Favourite Hero:</label>
					<select class="input-selection" name="user_hero">
						<option value="brainio">Brainio</option>
						<option value="clamp">Clamp</option>
						<option value="dr_goliath">Dr Goliath</option>
						<option value="power_maiden">Power Maiden</option>
						<option value="ironjaw">Ironjaw</option>
						<option value="shroud">Shroud</option>
					</select>
				</div>
				<div class="input-row">
					<label for="bio">Sidekick Bio:</label>
					<textarea name="user_bio" id="bio" maxlength="140" placeholder="Enter your bio"></textarea>
				</div>
				<div class="input-row">
					<input type="submit" value="Select Sidekick">
					<input type="reset" value="Reset">
				</div>
			</form>

		</div>

<?php require_once("common/footer.php"); ?>	
