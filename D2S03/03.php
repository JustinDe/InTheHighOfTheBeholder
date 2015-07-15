<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char center"><img src="/images/char/siri/siri-neutral.png"></div>
		<div id="message">
        <span class="name">Siriak the Rapid</span>
			<p>
				Hey, <?php echo($_SESSION['username']); ?>. I'm going to drive over to the gas station and get some grub. The food here sucks. Wanna come?
			</p>
			<a href="04.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>