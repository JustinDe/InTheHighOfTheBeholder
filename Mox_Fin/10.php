<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('http://hashtagnerd.com/InTheHighOfTheBeholder/images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="http://hashtagnerd.com/InTheHighOfTheBeholder/images/char/mox/mox-shy.png"></div>
		<div id="message">
        <span class="name">Moxanimous</span>
			<p>
				Maybe you ought to go home, <?php echo($_SESSION['username']); ?>. Or see the nurse.
			</p>
			<a href="../bad_end.php" class="next">Rejected</a>
		</div>
	</section>
<?php include '../template/footer.php';?>