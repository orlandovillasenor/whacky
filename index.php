<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Whack an AMG Employee</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
	<link rel="stylesheet" href="/assets/css/whack.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
    <div class="flex-container top-bar">

		
		<div class="Left pre-header z-depth-2">
		</div>
		<div class="Right pre-header z-depth-2">
		</div>
	</div>
		
<div class="header">
    <div class="flex-container">

		
		<div class="Left lower-bar z-depth-2 valign-wrapper">
			<div class="valign"><a href="/" title="Replay The Game"><img src="/assets/img/amg-whack-attack.svg" onError="this.src='amg-whack-attack.png';" alt="AMG Whack Attack" class="logo"/></a></div>
		</div>
		<div class="Right lower-bar z-depth-2 valign-wrapper">
			<div class="col-sm-6 text-left valign">
				<h2 class="score">Score: 0</h2>
			</div>
			<div class="col-sm-6 text-right">
				<h2 class="counter">Time: 25</h2>
			</div>
		</div>
	</div>
</div>	
    <div class="flex-container main-section">

        <div class="Left">
        
		<div class="row choice">
			<h2 class="text-center">Choose your "favorite" employees</h2>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/kim.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/chuck.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/rick.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/henri-ann.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/janet.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/jen.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/antonio.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/chris.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/soe.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/julius.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/melissa.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/jaq.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/laci.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/dirk.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/mary.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/nick.jpg" />
			</div>
			<div class="employee-wrap">
				<img class="employee" src="/assets/img/tiff1.jpg" />
			</div>
		</div>
        
        </div>
        
        <div class="Right">
        	
	<div class="container-fluid">
		<div class="row">
			<div id="game-board">
			<div class="col-xs-6 text-left hidden-sm">
				<h2 class="score">Score: 0</h2>
			</div>
			<div class="col-xs-6 text-right hidden-sm">
				<h2 class="counter">Time: 25</h2>
			</div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
	
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
	
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div class="square clickable"><img class="whack-bob" src="" alt="SpongeBob"></div>
				<div><button id="start-button" type="button" class="waves-effect waves-light btn disabled">Play Now!</button></div>
			</div>
			</div>
			
			<div class="row">

			<div class="col-xs-12 text-center">
				
				<div id="input-score">
					<h2 class="score">Score: 0</h2>
					<h2>Submit Your Score</h2>
					<p>
						<input type="text" id="name" name="name" placeholder="Name"/>
					</p>
					<div>
						<button id="submit-score" onclick="postScore()" class="waves-effect waves-light btn">Submit</button>
					</div>
				</div>
				
				<div id="leader-board" class="center-block"></div>
				<!--<div>-->
				<!--	<img id="end-image" src="/assets/img/kim2.jpg"></img>-->
				<!--</div>-->
				
				
				
				<div id="play-again">
					<a href="/" class="waves-effect waves-light btn">Play Again</a>
				</div>
			</div>
		</div>
	</div>
			
        </div>
        
    </div> 
	
	
	
	


	<!--<button id="audio-pause" class="glyphicon glyphicon-volume-off pull-right"></button>-->
	<!--<button id="audio-play" class="glyphicon glyphicon-volume-up pull-right"></button>-->
<audio id="laugh" src="/assets/audio/spongebob-laugh-short.mp3" type="audio/mpeg"></audio>
<audio id="hula" src="/assets/audio/spongebob-hula.mp3" type="audio/mpeg" loop="loop"></audio>

<script src="/assets/js/whack.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>


</body>
</html>
