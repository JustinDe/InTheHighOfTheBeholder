<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="../images/char/mox/mox-neutral.png"></div>
		<div id="message">
<?php
	$Choice = $_SESSION['Mox'][0];
	if($Choice == 1){
		echo'
		<span class="name">Moxanimous</span><p>
		I\'m still a little sore from my last workout.
		</p>
		<a href="04.php" class="next">Next</a>
		';
		}
	else{
		echo'
		<span class="name">Moxanimous</span>
		<p>
		I\'m a little faint, actually.
		</p>
		<a href="10.php" class="next">Next</a>
		';
		}
?>

		</div>
	</section>
<?php include '../template/footer.php';?>