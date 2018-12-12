<?php
class Movie
{
    //Return list de film
    public function getAllMovies()
    {
        $db = $this->dbConnect();
        $listMovie = $db->query('SELECT title FROM movie');
        return $listMovie;
    }

    //return info du film
    public function getBaseInfos($idMovie)
    {
        $db = $this->dbConnect();

        $req = $db->prepare('SELECT movie.*
                                      FROM movie
                                      WHERE movie.id = :id');
        $req->execute(array(
                "id" => $idMovie
        ));
        $infoMovie = $req->fetchAll(PDO::FETCH_ASSOC);
        return $infoMovie;
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