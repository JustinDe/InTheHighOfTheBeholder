<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('../images/bg/Soccer Field.jpg') no-repeat top center;
	background-size: cover;
}

</style>

</div>

	<section id="board">
	<div class="char right"><img src="../images/char/mox/mox-neutral.png"></div>
		<div id="message">
        <span class="name"><?php echo($_SESSION['username']); ?></span>
			<ul>
           <li><a href="05.php">Well, not all of you...</a></li>
			<li><a href="05.php">You'll have to play better than that if you want to beat Goblin Tech.</a></li>
           </ul>
		</div>
	</section>
<?php include '../template/footer.php';?>