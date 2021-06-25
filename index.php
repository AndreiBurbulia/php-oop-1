<?php 


class Movie 
{
    public $title;
    public $trama;
    public $uscita;
    public $durata;
    public $genere;
    public $lingua;

    /**
     * Movie construct
     * 
     * @param $title 
     */
    function __construct(string $_title, string $_trama, string $_genere, string $_lingua)
    {
        $this->title = $_title;
        $this->trama = $_trama;
        $this->genere = $_genere;
        $this->lingua = $_lingua;
    }

    public function getUscita()
    {
        return $this->uscita;
    }
    public function setUscita($uscita)
    {
        $this->uscita = $uscita;
    }

    public function getDurata()
    {
        return $this->durata;
    }
    public function setDurata($durata)
    {
        $this->durata = $durata;
    }

};

$movie1 = new Movie('Avventure nel BackEnd', 'Film che si svolge nella scuala di Boolean', 'Avventura', 'Italiano');
    
$movie2 = new Movie('Angoli oscuri del BackEnd', 'La trama di questo film non esiste','Horror', 'Sconosciuta');

$movie2->setUscita('22/11/2025');

var_dump($movie2);

$movie1->setDurata(122);

var_dump($movie1);


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
    <h1>Film in Lista</h1>

    <h2><?php echo $movie1->title ?></h2>
    <p>Trama: <?php echo $movie1->trama ?></p>
    <p>Genere: <?php echo $movie1->genere ?></p>
    <p>Lingua: <?php echo $movie1->lingua ?></p>
    <p>Durata: <?php echo $movie1->durata ?></p>
    <p>Uscita: <?php echo $movie1->uscita ?></p>

    <h2><?php echo $movie2->title ?></h2>
    <p>Trama: <?php echo $movie2->trama ?></p>
    <p>Genere: <?php echo $movie2->genere ?></p>
    <p>Lingua: <?php echo $movie2->lingua ?></p>
    <p>Durata: <?php echo $movie2->durata ?></p>
    <p>Uscita: <?php echo $movie2->uscita ?></p>

    <?php  ?>



</body>

</html>