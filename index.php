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
        public $stringEta = '';
        // public $awards;

       function __construct($_name, $_category, $_lenght, $_director, $_mainActor, $_year){
            $this->name = $_name;
            $this->category = $_category;
            $this->lenght = $_lenght;
            $this->director = $_director;
            $this->mainActor = $_mainActor;
            $this->year = $_year;
       }

       public function getEtaFilm( $anno ) {

          if( $anno > '2003' ){
                $this->stringEta = "Il Film ha meno di vent'anni";
          }else{
                $this->stringEta = "Il Film ha almeno vent'anni";
          }

       }

    }

    $pulpfiction = new Movie('Pulpfiction', 'crime', '154 min', 'Quentin Tarantino', 'John Travolta', 1994 );
    

    $interstellar = new Movie( 'Interstellar', 'sci-fi', '169 min', 'Christopher Nolan', 'Matthew McConaughey', 2004 );
    

    $arrayFilm = [
        new Movie('Pulpfiction', 'crime', '154 min', 'Quentin Tarantino', 'John Travolta', 1994 ),
        new Movie( 'Interstellar', 'sci-fi', '169 min', 'Christopher Nolan', 'Matthew McConaughey', 2004 )
    ];
    $pulpfiction->getEtaFilm('1994');
    $interstellar->getEtaFilm('2004');
    var_dump($pulpfiction, $interstellar);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>php oop 1</title>
</head>
<style>
    .container{
        margin-top: 10em;
    }
</style>
<body>
    
    <div class="container">

        <h1 class="text-center my-5">Tabella Film</h1>
        <table class="table">
            <thead>
                <tr>
                    
                    <th>name</th>
                    <th>category</th>
                    <th>lenght</th>
                    <th>director</th>
                    <th>main actor</th>
                    <th>year</th>
                </tr>
            </thead>
            <tbody>
               
                    
                    <?php  foreach ( $arrayFilm as $elem ) { ?>
                        <tr>
                            
                            <td><b><?php echo $elem->name  ?> </b> </td>
                            <td> <?php echo $elem->category  ?> </td>
                            <td> <?php echo $elem->lenght  ?> </td>
                            <td> <?php echo $elem->director  ?> </td>
                            <td> <?php echo $elem->mainActor  ?> </td>
                            <td> <?php echo $elem->year  ?> </td>
                        </tr>
                    <?php } ?>
                    
            
            </tbody>
        </table>

        <div>
            <?php  foreach ( $arrayFilm as $elem ) { ?>
                <p><?php echo $elem->stringEta ?></p>
            <?php } ?>
        </div>

    </div>

    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>