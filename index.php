<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Whack an AMG Employee</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/whack.css">
	<link href='http://fonts.googleapis.com/css?family=Joti+One' rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	<button id="audio-pause" class="glyphicon glyphicon-volume-off pull-right"></button>
	<button id="audio-play" class="glyphicon glyphicon-volume-up pull-right"></button>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h1>Whack an AMG Employee</h1>
			</div>
		</div>
		<div class="row choice">
			<h2 class="text-center">Choose your favorite employee</h2>
			<div class="col-sm-3 col-md-2">
				<img class="employee" src="/assets/img/kim3.jpg" />
			</div>
			<div class="col-sm-3 col-md-2">
				<img class="employee" src="/assets/img/antonio1.jpg" />
			</div>
			<div class="col-sm-3 col-md-2">
				<img class="employee" src="/assets/img/chris3.jpg" />
			</div>
			<div class="col-sm-3 col-md-2">
				<img class="employee" src="/assets/img/soeurette2.jpg" />
			</div>
			<div class="col-sm-3 col-md-2">
				<img class="employee" src="/assets/img/julius2.jpg" />
			</div>
			<div class="col-sm-3 col-md-2">
				<img class="employee" src="/assets/img/tiff1.jpg" />
			</div>
		</div>
		<div class="row">
			<div id="game-board">
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
	
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
	
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div><button id="start-button" type="button" class="btn btn-default btn-large disabled">Play Now!</button></div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2 id="score">Score: 0</h2>
				<div id="input-score">
					<p>
						<input type="text" id="name" name="name" placeholder="Name"/>
					</p>
					<div>
						<button id="submit-score" onclick="postScore()" class="btn btn-default btn-large">Submit</button>
					</div>
				</div>
				<h2 id="counter">Time: 25</h2>
				<div id="leader-board" class="center-block"></div>
				<div>
					<img id="end-image" src="/assets/img/kim2.jpg"></img>
				</div>
				<div>
					<a id="play-again" href="/" class="btn btn-default btn-large">Play Again?</a> <a id="exit-game" href="/" class="btn btn-default btn-large">Exit Game?</a>
				</div>
			</div>
		</div>
	</div>

<audio id="laugh" src="/assets/audio/spongebob-laugh-short.mp3" type="audio/mpeg"></audio>
<audio id="hula" src="/assets/audio/spongebob-hula.mp3" type="audio/mpeg" loop="loop"></audio>

<script src="/assets/js/whack.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
