<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('http://hashtagnerd.com/InTheHighOfTheBeholder/images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="http://hashtagnerd.com/InTheHighOfTheBeholder/images/char/mox/mox-angry.png"></div>
		<div id="message">
        <span class="name">Moxanimous</span>
	<p>
    What's this about, <?php echo $_SESSION['username']; ?>?
    </p>
    <a href="05.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>