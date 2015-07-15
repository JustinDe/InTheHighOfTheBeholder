<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char center"><img src="/images/char/mox/mox-neutral.png"></div>
		<div id="message">
			<span class="name">Moxanimous</span>
			<p>Hey, <?php echo($_SESSION['username']); ?> What's on your mind?</p>

<a href="../Mox_Fin/00.php" class="next">Next</a>

			
		</div>
	</section>
<?php include '../template/footer.php';?>