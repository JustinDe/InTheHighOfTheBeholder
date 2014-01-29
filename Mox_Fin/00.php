<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('http://hashtagnerd.com/InTheHighOfTheBeholder/images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="http://hashtagnerd.com/InTheHighOfTheBeholder/images/char/mox/mox-neutral.png"></div>
		<div id="message">
			<span class="name"><?php echo $_SESSION['username']; ?></span>
            <ul>
            	<li><a href="08.php">How do you like soccer?</a></li>
              	<li><a href="08.php">Do you like dancing?</a></li>
              <?php $Choice = $_SESSION['Mox'][1]; if($Choice == 1){echo'<li><a href="01.php">So I was wondering if you could show me that killer bicycle kick sometime...</a></li>';}; ?>
            </ul>
		</div>
	</section>
<?php include '../template/footer.php';?>