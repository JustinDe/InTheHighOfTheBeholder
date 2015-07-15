<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="/InTheHighOfTheBeholder/images/char/siri/siri-anger2.png"></div>
		<div id="message">
			<span class="name">Siriak the Rapid</span>
		<p>
			Lame. Whatever, <?php echo $_SESSION['username']; ?>. I'll see you around.
		</p>
		<a href="../bad_end.php" class="next">Rejected</a>
		</div>
	</section>
<?php include '../template/footer.php';?>