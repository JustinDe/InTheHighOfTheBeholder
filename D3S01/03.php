<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Library.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char center"><img src="../images/char/beth/bethel-shy.png"></div>
		<div id="message">
			<span class="name">Bethelzed</span><p>
				Oh, <?php echo($_SESSION['username']); ?> Why do you look so worried?
			</p>
			<a href="../Beth_Fin/00.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>