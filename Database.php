<?php

class Database extends SQLite3
{
    
    public function __construct()
    {
        $this->open('whack.db');
    }
  
    public function leaderBoard()
    {
        $collection = [];
        
        $stmt = $this->prepare('SELECT name, score FROM scores ORDER BY score DESC LIMIT 10');
        
        $results = $stmt->execute();
        
        while( $row = $results->fetchArray(SQLITE3_ASSOC) ){
            $collection[] = $row;        
        }
        
        return $collection;
    }
    
    public function save($name, $score)
    {
        
        $query = "INSERT INTO scores (id,name,score) VALUES ( null, '$name', '$score' )";
    
        $stmt = $this->prepare($query);
        
        $stmt->execute();
        
        $leaderBoard = $this->leaderBoard();
        
        return json_encode($leaderBoard, true);
        
    }
}