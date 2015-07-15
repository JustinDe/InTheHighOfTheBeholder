<?php include '../template/header.php'; ?>
<?php $_SESSION['Siri'][2]=1; ?>
<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Store Interior.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char"></div>
		<div id="message">
			<p>
				Are you sure about this?
			</p>
			<a href="08.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>