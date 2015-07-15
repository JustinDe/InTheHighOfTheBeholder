<?php include '../template/header.php'; ?>
<?php $_SESSION['turnOrder'][2] = 1;?>
<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char center animated fadeInUp"><img src="../images/char/siri/siri-neutral.png"></div>
		<div id="message">
			<p>
				Siriak sits surrounded by hangers on. You squeeze into a small wedge of table space.
			</p>
			<a href="16.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>