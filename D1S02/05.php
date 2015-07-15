<?php include '../template/header.php'; ?>
<?php $username = $_SESSION['username'];?>
<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char right"><img src="/InTheHighOfTheBeholder/images/char/mox/mox-happy.png"></div>
		<div id="message">
			<span class="name">Moxanimous</span><p>
				I'm just kidding, <?php echo($username); ?>. You don't have to be so serious all the time. 
			</p>
			<a href="06.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>