<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Library.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="../images/char/beth/bethel-happy.png"></div>
		<div id="message">
			<span class="name">Bethelzed</span><p>
				You know, <?php echo $_SESSION['username']; ?>, I thought you did a really good job in class the other day.
			</p>
			<a href="02.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>