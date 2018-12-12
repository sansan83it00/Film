<?php
class Person
{
    //infos d'un réalisateur, d'un acteur, d'un film
    public function getBaseInfos(){
        $db = $this->dbConnect();
        $req = $db->query('SELECT');

        return $req;
    }

    private function dbConnect(){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=film;charset=utf8', 'root', '');
            return $db;
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
}