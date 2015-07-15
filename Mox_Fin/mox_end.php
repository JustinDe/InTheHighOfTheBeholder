<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/images/char/mox/mox-splash.png') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char center"></div>
		<div id="message">
			<p>
				True power is slow dancing with someone who could beat you senseless.
			</p>
			<a href="../index.php" class="next">End</a>
		</div>
	</section>
    <div id="audio"><audio controls autoplay>
  <source src="/audio/theme.ogg" type="audio/ogg">
  <source src="/audio/theme.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
</div>
<?php include '../template/footer.php';?>