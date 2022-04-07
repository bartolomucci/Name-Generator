<?php 


require_once '../app/Manager/dbManager.php'; 
require '../app/Entity/RandomNicks.php';

class RandomNicksManager extends Manager
{

    public function getAll()
    {
        $sql = 'SELECT * FROM names';
        $req = $this->getPdo()->prepare($sql);
        $req->execute();
        $displays = $req->fetchAll(PDO::FETCH_ASSOC);
        $result = [];
        foreach($displays as $key) 
        {
            $obj = new RandomNicks();
            $obj->setId($key['id']);
            $obj->setTitle($key['title']);
            $result[] = $obj;
        }

        return $result;
    }


    public function getRandom()
    {
        $sql = 'SELECT title FROM names  
                ORDER BY RAND ()  
                LIMIT 1';
        $req = $this->getPdo()->prepare($sql);
        $req->execute();
        $select = $req->fetch(PDO::FETCH_ASSOC);

        return $select;
    }

}