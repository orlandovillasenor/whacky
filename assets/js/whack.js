/*!
 * Javascript for AMG Whack An Employee game
 */

    var employee = $('.employee'),
        employees = [],
        leaderBoard = $('#leader-board'),
        inputScore = $('#input-score'),
        leaderBoard_html = '<h2>Leader Board</h2>',
        square = $('.square'),
    	score = 0,
    	//highScore = null,
    	counter = 25,
    	secret = "38384040373937396665",
    	secretInput = '',
    	//interval1 = null,
    	laugh = $('#laugh')[0],
    	hula = $('#hula')[0],
    	audioToggleOff = $('#audio-pause'),
    	audioToggleOn = $('#audio-play');

    audioToggleOn.hide();
    audioToggleOff.click(function() {
    	hula.pause();
    	audioToggleOff.hide();
    	audioToggleOn.show();
    });
    audioToggleOn.click(function() {
    	hula.play();
    	audioToggleOn.hide();
    	audioToggleOff.show();
    });
    
    // Plays initial music
    //hula.play();
    leaders();
    konamiCode();
    
    // Hover event for employees
    employee.hover(function(){
        $(this).css('border', '5px solid green').css('cursor', 'pointer');
        }, function(){
        $(this).css('border', '5px solid transparent');
    });
    
    // Click event for selecting employees
    employee.click(function(){
        $('#start-button').removeClass('disabled').addClass('active');
        selectEmployee($(this));
    });
    
    // Start the game
    $('#start-button').click(function(e) {
        if ($(this).hasClass('active')){
            setInterval('timer()', 1000);
        	$('#start-button').addClass('disabled');
        	level1();
        	setTimeout('level2()', 14000);
        	hits();
        	endGame();    
        }
        e.preventDefault();
    });
    
    // Adds the selection to employees array and fades it out
    function selectEmployee(selection) {
        employees.push(selection.attr('src'));
        selection.fadeOut(700);
    }
    
    // Returns random index from provided array
    function getRandomIndex(array) {
        return Math.floor(Math.random() * array.length);
    }
    
    // Returns a random employee
    function showRandomEmployee(){
        return employees[getRandomIndex(employees)];
    }
    
    // The initial speed level to start the game
    function level1() {
    	var interval1 = setInterval(function() {
    		$(square[getRandomIndex(square)]).children().attr('src', showRandomEmployee()).fadeIn(700, function(){
    			$(this).fadeOut(700);
    		});
    	}, 1500);
    	
    	setTimeout(function() {
    	    clearInterval(interval1);	
    	}, 15000);
    }
    
    // The second level speed called after 15 seconds
    function level2() {
    	var interval2 = setInterval(function() {
    		$(square[getRandomIndex(square)]).children().attr('src', showRandomEmployee()).fadeIn(400, function(){
    			$(this).fadeOut(400);
    		});
    	}, 800);
    }
    
    // Function used when an employee is hit during the game
    function hits() {
    	$('.whack-bob').click(function() {
            if(checkSecret() == true) {
                ++score;
                score++;
            } else {
                score++;    
            }
    		$(this).hide();
    		laugh.play();
    		$('#score').text('Your Score: ' + score);
    	});
    }
    
    // The timer for the game. Starts at 25 seconds and counts down
    function timer() {
        counter--;    
        $('#counter').text('Time: ' + counter);
    }
    
    function konamiCode(){
        $(document).keyup(function(e) {
           secretInput += e.which;
           console.log(secretInput);
        });  
    }
    
    function checkSecret() {
        if(secretInput == secret) {
            return  true;
        } else {
            return false;
        }
        
    }
    
    function leaders() {
        $.ajax({
            url: 'ajax.php',
            data: {
                action: 'leaders'
            },
            dataType: 'json',
            method: 'POST'
        }).done(function(data) {
            
            for ( var i = 0; i < data.length; i++ ) {
                leaderBoard_html += '<p>' +data[i]['name']+ ' : ' +data[i]['score']+ '</p>';    
            }
            
            leaderBoard.html(leaderBoard_html);
        });
    }
    
    function postScore() {
        var name = $('#name').val();
        
        $.ajax({
            url: 'ajax.php',
            dataType: 'json',
            data: {
                action: 'postScore',
                name: name,
                score: score
            },
            method: 'POST'
  	    }).done(function(data){
  	        leaderBoard_html = '<h2>Leader Board</h2>';
  	        for ( var i = 0; i < data.length; i++ ) {
                leaderBoard_html += '<p>' +data[i]['name']+ ' : ' +data[i]['score']+ '</p>';    
            }
            leaderBoard.html(leaderBoard_html);
  	    });
    }
    
    // Ends the game when the timer runs out
    function endGame(){
    	setTimeout(function() {
    // 		var highScore = localStorage.getItem('highScore');
    // 		if (score > highScore) {
    // 			localStorage.removeItem('highScore');
    // 			highScore = localStorage.setItem('highScore', score);
    //   			//$('#high-score').text('High Score: ' + score);
    // 		} else {
    // 			highScore = localStorage.getItem('highScore');
    // 			//$('#high-score').text('High Score: ' + highScore);
    // 		}
      		$('#game-board').hide();
      		inputScore.show();
      		$('#play-again').show();
      		$('#exit-game').show();
      		$('#leader-board').show();
      		$('#end-image').show();
      		$('#counter').hide();
    	}, 25000);
    }