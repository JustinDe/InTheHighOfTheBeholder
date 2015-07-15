<?php include '../template/header.php'; ?>
<?php $username = $_SESSION['username'];?>
<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Classroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char"></div>
		<div id="message">
			<span class="name">Teacher</span><p>
				So, <?php echo($username); ?>, what is the solution?
			</p>
<ul>
	<li><a href="08.php">Six</a></li>
	<li><a href="09.php">Sixteen</a></li>
	<li><a href="10.php">I wasn't paying attention</a></li>
</ul>
		</div>
	</section>
<?php include '../template/footer.php';?>