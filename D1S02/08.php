<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char right"><img src="/images/char/mox/mox-neutral.png"></div>
		<div id="message">
            <ul>
            	<?php
            		if($_SESSION['turnOrder'][1] == 0)
            		{
		            	echo('<li><a href="09.php">Pick up your tray and sit with Bethelzed.</a></li>');
		            }
					if($_SESSION['turnOrder'][2] == 0)
            		{
						echo('<li><a href="15.php">Pick up your tray and sit with Siriak the Rapid.</a></li>');
					}	
				?>
				<li><a href="../D1S03/00.php">Sit quietly and wait for lunch to end.</a></li>
			</ul>
		</div>
	</section>
<?php include '../template/footer.php';?>