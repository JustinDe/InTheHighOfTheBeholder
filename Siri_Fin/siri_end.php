<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/char/siri/siri-splash.png') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"></div>
		<div id="message">
			<span class="name">Siriak The Rapid</span>
			<p>
				This car is a castle. The passenger seat is your throne. Royalty does not concern itself with common dances.
			</p>
			<a href="../index.php" class="next">End</a>
		</div>
	</section>
    <div id="audio"><audio controls autoplay>
  <source src="/InTheHighOfTheBeholder/audio/theme.ogg" type="audio/ogg">
  <source src="/InTheHighOfTheBeholder/audio/theme.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</InTheHighOfTheBeholder/audio>
</div>
<?php include '../template/footer.php';?>