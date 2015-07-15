<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Lunchroom.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char center"><img src="/InTheHighOfTheBeholder/images/char/siri/siri-neutral.png"></div>
		<div id="message">
			<ul>
				<?php
					if($_SESSION['turnOrder'][0] == 0)
            		{
						echo('<li><a href="02.php">Pick up your tray and sit with Moxanimous.</a></li>');
					}
					if($_SESSION['turnOrder'][1] == 0)
            		{
						echo('<li><a href="09.php">Pick up your tray and sit with Bethelzed.</a></li>');
					}
				?>
					<li><a href="../D1S03/00.php" onClick="$('.char').addClass('animated fadeOutUp');">Sit quietly and wait for lunch to end.</a></li>
				
           </ul>
		</div>
	</section>
<?php include '../template/footer.php';?>