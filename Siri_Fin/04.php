<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char left"><img src="/images/char/siri/siri-neutral.png"></div>
		<div id="message">
		<span class="name">Siriak the Rapid</span>
		<p>
			Hehe. You're such a nerd, <?php echo $_SESSION['username']; ?>. So what's up?
	    </p>
    <a href="05.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>