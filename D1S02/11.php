<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char left"><img src="/images/char/beth/bethel-neutral.png"></div>
		<div id="message">
			<span class="name"><?php echo($_SESSION['username']); ?></span>
<ul>
<li><a href="12.php">I haven't studied.</a></li>
<li><a href="12.php">I refuse to be tested by the unworthy.</a></li>
</ul>
			
		</div>
	</section>
<?php include '../template/footer.php';?>