<?php include '../template/header.php'; ?>
<?php $_SESSION['turnOrder'][0] = 1;?>
<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char right animated fadeInRight"><img src="/InTheHighOfTheBeholder/images/char/mox/mox-neutral.png"></div>
		<div id="message">
			<p>Moxanimus slaps you heartily on the back with an eye-stalk.</p>
			<a href="03.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>