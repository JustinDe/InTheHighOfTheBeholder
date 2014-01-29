<?php include '../template/header.php'; ?>
<?php $username = $_SESSION['username'];?>
<style media="screen" type="text/css">

#board{
	background: url('http://hashtagnerd.com/InTheHighOfTheBeholder/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char right"><img src="http://hashtagnerd.com/InTheHighOfTheBeholder/images/char/mox/mox-neutral.png"></div>
		<div id="message">
			<span class="name">Moxanimous</span><p>
				 You aren't usually so sociable, <?php echo($_SESSION['username']); ?>. Did someone take your seat?
			</p>
			<a href="04.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>