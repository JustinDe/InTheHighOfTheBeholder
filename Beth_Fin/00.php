<?php include '../template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('/InTheHighOfTheBeholder/images/bg/Library.jpg') no-repeat top center;
	background-size: cover;
}

</style>

	<section id="board">
	<div class="char left"><img src="/InTheHighOfTheBeholder/images/char/beth/bethel-neutral.png"></div>
		<div id="message">
			<span class="name"><?php echo $_SESSION['username']; ?></span>
            <ul>
            	<li><a href="08.php">How about we forget the books and go dancing?</a></li>
              	<li><a href="08.php">Can I copy your homework?</a></li>
              <?php $Choice = $_SESSION['Beth'][1]; if($Choice == 1){echo'<li><a href="01.php">You\'re beautiful, and therefore to be wooed; You are Beholder, and therefore to be won</a></li>';}; ?>
            </ul>
		</div>
	</section>
<?php include '../template/footer.php';?>