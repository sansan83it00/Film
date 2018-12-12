<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion Film</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

$url = '';
if(isset($_GET['action'])){
    $url = $_GET['action'];
}


    switch ($url) {
        case '' :
            require __DIR__ . '/View/home.php';
            break;
        case '/' :
            require __DIR__ . '/View/home.php';
            break;
        case 'movie' :
            require __DIR__ . '/View/pageTest.php';
            break;
        default:
            require __DIR__ . '/View/404.php';
            break;
    }

?>
</body>
</html>
