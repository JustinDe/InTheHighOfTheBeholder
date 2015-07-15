<?php include 'template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/badsplash.png') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char"></div>
		<div id="message">
			<p>
				It looks like you'll be going to the Big Dance after all. And you won't be alone.
			</p>
			<a href="index.php" class="next">End</a>
		</div>
	</section>
<div id="audio"><audio controls autoplay>
  <source src="/audio/theme.ogg" type="audio/ogg">
  <source src="/audio/theme.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
</div>

<?php include 'template/footer.php';?>