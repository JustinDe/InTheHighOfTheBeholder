<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>


	<section id="board">
	<div class="char center"><img src="/images/char/mox/mox-happy.png"></div>
		<div id="message">
        <span class="name">Moxanimous</span>
		<p>
		<?php echo($_SESSION['username']); ?>, this is fantastic! Hey, you should come with me to the Big Dance, we can show these softies how it's done!
		</p>
		<a href="../mox_end.php" class="next">Success</a>
		</div>
	</section>
<?php include '../template/footer.php';?>