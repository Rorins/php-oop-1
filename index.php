
<?php
//CLASSE MOVIE
class Movie{
//VARIABILI D'ISTANZA
   //PROPRIETA'
    public $name;
    public $genre;
//COSTRUTTORE
//la -> è come il . in javascript
    function __construct($name, $genre){
        $this->name = $name; //Quindi qua ad esempio spiderman diventerà la proprietà sopra
        $this->genre = $genre;
    }
//METODI
    public function printer($movie){
    echo $movie->name."-".$movie->genre;
    }
}

//ISTANZA/OGGETTO
//L'ALTERNATIVA SAREBBE STATA $element->$name = 'spiderMan' ma usiamo un costruttore
//dove con una funzione(COSTRUTTORE)inseriamo name e genre come suoi parametri
$movie1 = new Movie('spiderman','action');
$movie2 = new Movie('parasyte','thriller');

$movie1 -> printer($movie1).'</br>';
$movie2 -> printer($movie2);
?>