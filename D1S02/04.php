<?php include '../template/header.php'; ?>
<?php $username = $_SESSION['username'];?>
<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char right"><img src="/InTheHighOfTheBeholder/images/char/mox/mox-neutral.png"></div>
		<div id="message">
			<span class="name"><?php echo($username); ?></span><p>
			<ul>
	            <li><a href="05.php">...No.</a></li>
				<li><a href="05.php">I sit where I please.</a></li>
           </ul>
		</div>
	</section>
<?php include '../template/footer.php';?>