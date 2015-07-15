<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Library.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="../images/char/beth/bethel-shy.png"></div>
		<div id="message">
        <span class="name">Bethelzed</span>
		<p>
			Oh... Thanks, <?php echo $_SESSION['username']; ?>. I guess. I have to get to class...
		</p>
		<a href="../bad_end.php" class="next">Rejected</a>
		</div>
	</section>
<?php include '../template/footer.php';?>