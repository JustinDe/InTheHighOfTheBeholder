<?php include 'template/header.php'; ?>

<style media="screen" type="text/css">

#board{
	background: url('http://hashtagnerd.com/InTheHighOfTheBeholder/images/bg/Classroom.jpg') no-repeat top center;
	background-size: cover;
}

h1 {
    color: #FFFFFF;
    font-family: Gotham,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 72px;
    font-weight: bold;
    margin-top: 100px;
    text-align: center;
    text-transform: uppercase;
}

#message{
	text-align:center;
	}

</style>
</div>

	<section id="board">
	<h1>Beholder High</h1>
		<div id="message">
			<form action='_index2.php' method='POST'>
		Player Name: 
		<input type="text" name="username" id="username">
		<input type="submit" value="Submit">
	</form>
		</div>
	</section>
<?php include 'template/footer.php';?>