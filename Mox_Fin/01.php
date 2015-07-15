<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char right"><img src="../images/char/mox/mox-happy.png"></div>
		<div id="message">
			<span class="name">Moxanimous</span><p>
				I don't know, <?php echo $_SESSION['username']; ?>. Do you think you can keep up with me?
			</p>
			<a href="02.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>