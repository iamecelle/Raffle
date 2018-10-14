<!DOCTYPE html>
<html>
<head>
	<title>Raffle</title>
<link rel="stylesheet" type="text/css" href="login.css">
	<?php require 'logic.php';?>
	

</head>
<body>

<nav> 
    <div>
    <div class="main-raffle">
      <ul>
        <li><a href="index.html"> Home </a></li>
        <li><a href="add.php"> Add </a></li>
      </ul>
    </a>
  </li>
</ul>
</div>
</div>
</nav>

<br> <br> 

<div class="nav-container">
  <div class="nav-section">
    <div class="row">
	<h1>Raffle</h1>

	<form method="POST" action="index.php"> 

		<input type="text" name="contestant0"><br>
		<input type="text" name="contestant1"><br>
		<input type="text" name="contestant2"><br>
		<input type="text" name="contestant3"><br>

		<input type="submit" value="Pick the winners!">
	</form>

	<?php // print_r($_POST);?>

		<p>
			The winning number is <?=$winning_number?>!
		</p>

		<?php foreach ($contestants as $key => $value) { ?>
			<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8');?> is a <?php echo $value?> <br>
		<?php } ?>

		<br>

		<?php if ($winner_count==0) {?>
			No winners this round
			<?  } elseif ($winner_count>1) {?>
				It's a tie
			<? } ?>

			<p>
				<a href="add.php"> Play Again!</a>
			</p>
		</div>

</body>
</html>