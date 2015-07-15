<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char right"><img src="/InTheHighOfTheBeholder/images/char/mox/mox-neutral.png"></div>
		<div id="message">
			<span class="name">Moxanimous</span><p>
				 Hey. You're here early, aren't you <?php echo($_SESSION['username']); ?>? Did you come to watch us practice?
			</p>
			<a href="04.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>