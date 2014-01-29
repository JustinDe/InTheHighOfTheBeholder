<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('http://hashtagnerd.com/InTheHighOfTheBeholder/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char left"><img src="http://hashtagnerd.com/InTheHighOfTheBeholder/images/char/siri/siri-neutral.png"></div>
		<div id="message">
			<span class="name"><?php echo($_SESSION['username']); ?></span>
<?php
$Choice = $_SESSION['Siri'][0];
	
	if($Choice == 1){
		echo '
		<p>Yeah. Or we could just hang out by the dumpster. Maybe just you and me this time?</p>
		<a href="../Siri_Fin/03.php" class="next">Next</a>';
		}
	else{
		echo '
		<p>Sweet! I love beer!</p>
		<a href="../Siri_Fin/04.php" class="next">Next</a>';
		};
?>
		</div>
	</section>
<?php include '../template/footer.php';?>