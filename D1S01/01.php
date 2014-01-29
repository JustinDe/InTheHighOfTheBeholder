<?php include '../template/header.php'; ?>
<?php $username = $_SESSION['username'];?>
<style media="screen" type="text/css">

#board{
	background: url('http://hashtagnerd.com/InTheHighOfTheBeholder/images/bg/Classroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char"></div>
		<div id="message">
			<p>
            You're <?php echo($username); ?>, a student at Beholder High. This is a strange High School that admits beholders in addition to regular human students. There are only three days until the Big Dance. You've never been the most popular student, but the idea showing up at the Big Dance alone is too grim to bear.
            </p>
			<a href="02.php" class="next">Next</a>
		</div>
	</section>
<?php include '../template/footer.php';?>