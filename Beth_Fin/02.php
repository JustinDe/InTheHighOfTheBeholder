<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('http://hashtagnerd.com/InTheHighOfTheBeholder/images/bg/Library.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char left"><img src="http://hashtagnerd.com/InTheHighOfTheBeholder/images/char/beth/bethel-neutral.png"></div>
		<div id="message">
			<span class="name"><?php echo $_SESSION['username'] ?></span>
<?php
$Choice = $_SESSION['Beth'][0];

	if($Choice == 1){
		echo '
		<p>Thanks! Most people don\'t seem to care much about their studies here..</p>
		<a href="../Beth_Fin/03.php" class="next">Next</a>';
		}
	else{
		echo '
		<p>I hope I never have to do that again.</p>
		<a href="../Beth_Fin/04.php" class="next">Next</a>';
		};
?>
		</div>
	</section>
<?php include '../template/footer.php';?>