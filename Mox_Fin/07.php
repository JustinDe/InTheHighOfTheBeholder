<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="/InTheHighOfTheBeholder/images/char/mox/mox-shy.png"></div>
		<div id="message">
        <span class="name">Moxanimous</span>
		<p>
			This is a weird present, <?php echo($_SESSION['username']); ?>. You're a weird little guy.
		</p>
		<a href="../bad_end.php" class="next">Rejected</a>
		</div>
	</section>
<?php include '../template/footer.php';?>