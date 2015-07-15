<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char center"><img src="../images/char/siri/siri-neutral.png"></div>
		<div id="message">
			<span class="name">Siriak the Rapid</span><p>
				 Ha! I didn't even see you there, <?php echo($_SESSION['username']); ?>. But you get what I'm talking about, right? It's all about spinning rims and fuzzy dice. All that. We're going to hang out by the dumpster during free period. I stole some smokes from my mom. You should come with.
			</p>
			<a href="19.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>