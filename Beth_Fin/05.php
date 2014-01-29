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
$Choice = $_SESSION['Beth'][2];

	if($Choice == 1){
		echo '
		<p>No. Actually, I picked this up for you at the mall. That Dating-Sim sounds pretty complex.</p>
		<a href="../Beth_Fin/06.php" class="next">Next</a>';
		}
	else{
		echo '
		<p>I got you this...</p>
		<a href="../Beth_Fin/07.php" class="next">Next</a>';
		};
?>
		</div>
	</section>
<?php include '../template/footer.php';?>