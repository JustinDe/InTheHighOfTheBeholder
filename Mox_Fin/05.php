<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"><img src="../images/char/mox/mox-neutral.png"></div>
		<div id="message">
        <span class="name"><?php echo $_SESSION['username']; ?></span>
<?php
$Choice = $_SESSION['Mox'][2];

	if($Choice == 1){
		echo '
		<p>I was at the mall last night, and... well, you said you needed some workout music...</p>
		<a href="../Mox_Fin/06.php" class="next">Next</a>';
		}
	else{
		echo '
		<p>I got you this...</p>
		<a href="../Mox_Fin/07.php" class="next">Next</a>';
		};
?>
		</div>
	</section>
<?php include '../template/footer.php';?>