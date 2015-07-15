<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="/InTheHighOfTheBeholder/images/char/mox/mox-neutral.png"></div>
		<div id="message">
        <span class="name"><?php echo $_SESSION['username']; ?></span>
<?php
$Choice = $_SESSION['Mox'][0];

	if($Choice == 1){
		echo '
		<p>Actually, I\'ve been working out.</p>
		<a href="../Mox_Fin/03.php" class="next">Next</a>';
		}
	else{
		echo '
		<p>Maybe not...</p>
		<a href="../Mox_Fin/04.php" class="next">Next</a>';
		};
?>
		</div>
	</section>
<?php include '../template/footer.php';?>