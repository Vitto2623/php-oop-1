<?php 

class Movie {
    public $titolo;
    public $voto;
    public $annoDiProduzione;
    public $nazione;
    public $durata;

    
    function __construct($_titolo, $_annoDiProduzione, $_nazione, $_durata, $_voto){
        $this -> titolo = $_titolo;
        $this -> annoDiProduzione = $_annoDiProduzione;
        $this -> nazione = $_nazione;
        $this -> durata = $_durata;
        if(is_numeric($_voto)){
            $this -> voto = $_voto;
        }
    }

    public function getIntVote(){
        return intval($this->voto);
    }
}

$primoMovie = new Movie("Il Signore degli Anelli", 2002, 'Nuova Zelanda', '2h 58m', 8.8, );
$secondoMovie = new Movie("Harry Potter e la pietra filosofale", 2001, 'Regno Unito', '152m',  9.5,);


var_dump($primoMovie);
var_dump($secondoMovie);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-1</title>
</head>
<body>
    
    <div style="margin: 0 auto; width: 20%; text-align: center">
        <h1>Primo Film</h1>
        <pre> <h3 style="color: red;">Titolo:</h3> <?php echo $primoMovie->titolo ?></pre>
        <pre> <h3 style="color: red;">Anno di produzione:</h3> <?php echo $primoMovie->annoDiProduzione ?></pre>
        <pre> <h3 style="color: red;">Nazione:</h3> <?php echo $primoMovie->nazione ?></pre>
        <pre> <h3 style="color: red;">Voto:</h3> <?php echo $primoMovie->getIntVote() ?></pre>
        <pre> <h3 style="color: red;">Durata:</h3> <?php echo $primoMovie->durata ?></pre>
    </div>

    <div style="margin: 0 auto; width: 20%; margin-top: 100px; text-align: center">
        <h1>Secondo Film</h1>
        <pre> <h3 style="color: red;">Titolo:</h3> <?php echo $secondoMovie->titolo ?></pre>
        <pre> <h3 style="color: red;">Anno di produzione:</h3> <?php echo $secondoMovie->annoDiProduzione ?></pre>
        <pre> <h3 style="color: red;">Nazione:</h3> <?php echo $secondoMovie->nazione ?></pre>
        <pre> <h3 style="color: red;">Voto:</h3> <?php echo $secondoMovie->getIntVote() ?></pre>
        <pre> <h3 style="color: red;">Durata:</h3> <?php echo $secondoMovie->durata ?></pre>
    </div>


</body>
</html>









