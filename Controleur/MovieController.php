<?php
// Chargement des classes
require_once('../Modele/Movie.php');

function getListFilm()
{
    $movieManager = new Movie(); // Création d'un objet
    $movies = $movieManager->getAllMovies(); // Appel d'une fonction de cet objet

//    require('../View/listMovieView.php');
}

function getFilm()
{
    $id = $_GET['id'];
    $movieManager = new Movie();

    $results = $movieManager->getBaseInfos($id);

    require('../View/movieView.php');
}

getFilm();