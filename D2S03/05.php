<?php include '../template/header.php'; ?>
<?php $_SESSION['Siri'][1]=1; ?>
<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Gas Station2.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char center"><img src="../images/char/siri/siri-neutral.png"></div>
		<div id="message">
			<p>
				You motor over to the gas station without incident. To your surprise, Siriak the Rapid stays in the car.
			</p>
			<a href="06.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>