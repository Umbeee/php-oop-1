<!--
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà  -->




<?php

    class Movie {

        public $name;
        public $category;
        public $lenght;
        public $director;
        public $mainActor;
        public $year;
        // public $awards;

       function __construct($_name, $_category, $_lenght, $_director, $_mainActor, $_year){
            $this->name = $_name;
            $this->category = $_category;
            $this->lenght = $_lenght;
            $this->director = $_director;
            $this->mainActor = $_mainActor;
            $this->year = $_year;
       }
    }

    $pulpfiction = new Movie('Pulpfiction', 'crime', '154 min', 'Quentin Tarantino', 'John Travolta', '1994' );
    
    $interstellar = new Movie( 'Interstellar', 'sci-fi', '169 min', 'Christopher Nolan', 'Matthew McConaughey', '2014' );

    var_dump($pulpfiction, $interstellar);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
</head>
<body>
    
</body>
</html>