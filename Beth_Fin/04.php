<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Library.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="../images/char/beth/bethel-angry.png"></div>
		<div id="message">
			<span class="name">Bethelzed</span>
			<p>
				God, <?php echo($_SESSION['username']); ?>, you're hopeless. So did you want to ask me something?
		    </p>
    <a href="05.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>