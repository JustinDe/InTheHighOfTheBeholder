<?php include 'template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/images/tempbg.jpg') no-repeat top center;
	background-size: cover;
}

</style>

<div id="audio"><audio controls autoplay>
  <source src="/audio/theme.ogg" type="audio/ogg">
  <source src="/audio/theme.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
</div>

	<section id="board">
	<div class="char"><img src="/images/temp.png"></div>
		<div id="message">
			<span class="name">Eugene</span><p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel ante tempor, tempus orci non, egestas arcu. Nunc ac mauris at tellus pharetra tempus at vitae elit. Sed luctus justo vitae magna placerat bibendum. Proin sit amet pretium leo, a sagittis nunc. Vivamus tempor egestas massa, tincidunt aliquet libero vulputate ut. Phasellus gravida, eros nec suscipit bibendum, leo diam pretium metus, vitae porta tortor nisi a neque. Donec commodo arcu quis est eleifend sollicitudin. Ut convallis quam sit amet nisl fringilla iaculis. Nunc ullamcorper leo non molestie ultricies. Donec laoreet velit eu justo blandit, ac tempor felis vulputate. Phasellus dapibus ullamcorper neque, id aliquet leo fringilla vitae. Phasellus sagittis sodales urna, ut posuere augue molestie ac. Quisque ut consectetur diam, in adipiscing lacus.
			</p>
			<a href="#" class="next">Next</a>
		</div>
	</section>
<?php include 'template/footer.php';?>