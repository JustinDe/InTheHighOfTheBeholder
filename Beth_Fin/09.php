<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Library.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char left"><img src="../images/char/beth/bethel-neutral.png"></div>
		<div id="message">
        <span class="name"><?php echo $_SESSION['username'] ?></span>
<?php
	$Choice = $_SESSION['Beth'][0];
	if($Choice == 1){
		echo'<p>
		Of course! I know you take this stuff seriously.
		</p>
		<a href="04.php" class="next">Next</a>
		';
		}
	else{
		echo'
		<p>
		Umm...
		</p>
		<a href="10.php" class="next">Next</a>
		';
		}
?>

		</div>
	</section>
<?php include '../template/footer.php';?>