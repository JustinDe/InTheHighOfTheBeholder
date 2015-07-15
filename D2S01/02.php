<?php include '../template/header.php'; ?>
<?php $_SESSION['Mox'][1]=1; ?>
<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char right"><img src="../images/char/mox/mox-neutral.png"></div>
		<div id="message">
			<p>The action breaks, and you see the players scatter across the field. Moxanimous bobs over to the fence where you're standing.</p>
			<a href="03.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>