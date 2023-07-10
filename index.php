<?php 
    class Movie{
        public $title;
        public $genre;
        public $year;
        public $vote;
        public $length;
        public $production;
        public $restricted;

        function __construct($title, $genre, $year, $vote, $length, $production, $restricted){
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
            $this->vote = $vote;
            $this->length = $length;
            $this->production = $production;
            $this->restricted = $restricted;
        }

        function checkLegalAge(){
            $string = "Titolo: " .$this->title.";<br/>Genere: " .$this->genre.";<br/>Anno: " .$this->year.";<br/>Valutazione: " .$this->vote.";<br/>Durata: " .$this->length.";<br/>Regista: " .$this->production.";<br/>";

            if($this->restricted != false){
                $string = "(+18) Titolo: " .$this->title." (+18)<br/>Genere: " .$this->genre.";<br/>Anno: " .$this->year.";<br/>Valutazione: " .$this->vote.";<br/>Durata: " .$this->length.";<br/>Regista: " .$this->production.";<br/>";
            }
            return $string;
        }
    }
    $TheAdamProject = new Movie('The Adam Project', 'Azione, Fantascienza', '2022', '6,7/10', '106 min', 'Shawn Levy', true);

    $babylon = new Movie('Babylon', 'Commedia, Strorico', '2022', '6,7/10', '189 min', 'Damien Chazelle', false);

    echo $TheAdamProject-> checkLegalAge();
    echo "<br/>";
    echo $babylon-> checkLegalAge();

/* non mi funzionava git*/
?>
