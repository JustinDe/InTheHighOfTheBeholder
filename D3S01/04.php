<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char left"><img src="/images/char/siri/siri-neutral.png"></div>
		<div id="message">
			<span class="name">Siriak the Rapid</span><p>
				What is it, <?php echo($_SESSION['username']); ?>?
			</p>
			<a href="../Siri_Fin/00.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>