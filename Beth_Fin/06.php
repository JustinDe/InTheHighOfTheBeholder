<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('http://hashtagnerd.com/InTheHighOfTheBeholder/images/bg/Library.jpg') no-repeat top center;
	background-size: cover;
}

</style>


	<section id="board">
	<div class="char"><img src="http://hashtagnerd.com/InTheHighOfTheBeholder/images/char/beth/bethel-happy.png"></div>
		<div id="message">
			<span class="name">Bethelzed</span>
			<p>
				Oh, <?php echo $_SESSION['username'] ?>, that's so sweet! I was going to play when I got home tonight, but there's a dance tonight, isn't there? Do you... maybe... want to go with me?
			</p>
			<a href="Beth_end.php" class="next">Success</a>
		</div>
	</section>
<?php include '../template/footer.php';?>