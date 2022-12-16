<?php 
include_once __DIR__ . './movies/movies.php';
// var_dump(__DIR__)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Film:</h2>

    <form method="GET">
        <input type="text" name="title" placeholder="title">
        <input type="text" name="author" placeholder="autor">
        <input type="text" name="date" placeholder="date">
        <button type="submit">Invia</button>       
    </form>

    <?php 

    $movie1 = new Movie('qwerty', 'lorem', '666');
    var_dump($movie1);


    $title = $_GET['title'];
    var_dump($title);
    $author = $_GET['author'];
    var_dump($author);
    $date = $_GET['date'];
    var_dump($date);
    
    $movie2 = new Movie($title, $author, $date);
    var_dump($movie);
    


    echo $movie->getMovie();
    ?>
</body>
</html>
