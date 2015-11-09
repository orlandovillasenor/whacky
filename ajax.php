<?php

require_once('Database.php');

if (isset($_POST['action']))
{
    $action = $_POST['action'];
    
    $return = $action();
    
    echo $return;
    
    exit;
}

function leaders()
{ 
    $db = new Database();
    
    $highScores = $db->leaderBoard();
    
	echo json_encode($highScores);
	
}

function postScore()
{
    $score = $_POST['score'];
    
    $name = $_POST['name'];
    
    $db = new Database();
    
    $results = $db->save($name, $score);
    
    echo $results;
    
}