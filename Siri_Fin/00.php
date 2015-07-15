<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char left"><img src="../images/char/siri/siri-neutral.png"></div>
		<div id="message">
			<span class="name"><?php echo $_SESSION['username'] ?></span>
            <ul>
            	<li><a href="08.php">How fuel efficient is your car?</a></li>
              	<li><a href="08.php">Can you drive me somewhere?</a></li>
              <?php $Choice = $_SESSION['Siri'][1]; if($Choice == 1){echo'<li><a href="01.php">So, if you need someone to help you kill that six-pack, I\'ll be around.</a></li>';}; ?>
            </ul>
		</div>
	</section>
<?php include '../template/footer.php';?>