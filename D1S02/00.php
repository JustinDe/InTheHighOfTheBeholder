<?php include '../template/header.php'; ?>
<?php
	$_SESSION['turnOrder']= array(0,0,0);
?>
<style media="screen" type="text/css">

#board{
	background: url('/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char"></div>
		<div id="message">
			<p>
				It's lunch. If nothing else, you've resolved not to sit by yourself. There are plenty of empty seats.
			</p>
            
			<a href="01.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>