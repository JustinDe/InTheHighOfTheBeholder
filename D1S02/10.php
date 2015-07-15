<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char left"><img src="/InTheHighOfTheBeholder/images/char/beth/bethel-neutral.png"></div>
		<div id="message">
			<span class="name">Bethelzed</span><p>
				Oh, <?php echo($_SESSION['username']); ?> Did you want to sit with me? Are you ready for the test next week?
			</p>
			<a href="11.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>