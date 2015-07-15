<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char left"><img src="../images/char/siri/siri-angry1.png"></div>
		<div id="message">
			<span class="name">Siriak the Rapid</span>
<?php
	$Choice = $_SESSION['Siri'][0];
	if($Choice == 1){
		echo'<p>
		Sorry. I\'m always nervous when we hang out. You\'re like, too cool.
		</p>
		<a href="04.php" class="next">Next</a>
		';
		}
	else{
		echo'
		<p>
		But it\'s a really cool car!
		</p>
		<a href="10.php" class="next">Next</a>
		';
		}
?>

		</div>
	</section>
<?php include '../template/footer.php';?>