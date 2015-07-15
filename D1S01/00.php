<?php session_start();
$_SESSION['Mox']= array(0,0,0);
$_SESSION['Beth']= array(0,0,0);
$_SESSION['Siri']= array(0,0,0);
?>

<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Classroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char"></div>
		<div id="message">
       <p>
		We don't have long.
		</p>
			<a href="01.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>