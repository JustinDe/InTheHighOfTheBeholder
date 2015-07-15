<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char left"><img src="/InTheHighOfTheBeholder/images/char/siri/siri-neutral.png"></div>
		<div id="message">
			<span class="name"><?php echo($_SESSION['username']); ?></span>
<?php
$Choice = $_SESSION['Siri'][2];

	if($Choice == 1){
		echo '
		<p>I just found these. Maybe they\'d look cool in your car.</p>
		<a href="../Siri_Fin/06.php" class="next">Next</a>';
		}
	else{
		echo '
		<p>I got you this...</p>
		<a href="../Siri_Fin/07.php" class="next">Next</a>';
		};
?>

		</div>
	</section>
<?php include '../template/footer.php';?>