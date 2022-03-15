<?php
  class Movies{
    public $name;
    public $filmProductionCompany;
    public $language;
    public $genres;
    public $vote;
    public $cast;
  
    public function __construct($_name, $_company){
      $this -> name = $_name;
      $this -> filmProductionCompany = $_company;
    }
    public function setVote($_vote){
      if(is_numeric($_vote)){
        $this -> vote = $_vote;
      }else{
        $this -> vote = "Is not a Number";
      }
    }
    public function getVote(){
      echo "<li>" . $this -> vote . "</li>";
    }
    public function setArray($_type, ...$_elements){
      $this -> $_type = $_elements;
    }
    public function get($_type, $_element){
      foreach($this -> $_type as $_element){
        echo "<li>" . $_element . "</li>";
      }
    }
  }

//  New Instance Object
  $avengers = new Movies("Avengers: EndGame", "Marvel");
  echo "<h2>" . $avengers -> name . "</h2>";
  echo "<ul>";
    echo "<li>" . $avengers -> filmProductionCompany . "</li>";
    echo "<li>" . $avengers -> language = "En" . "</li>";
    echo "<li>Genres:</li>";
    $avengers -> setArray("genres","Action", "SuperHero", "Science Fiction", "Adventure", "Fantasy");
      echo "<ul>";
      $avengers -> get("genres", "gerne");
      echo "</ul>";
    $avengers -> setVote(8);
    $avengers -> getVote();
    echo "<li>Cast:</li>";
    $avengers -> setArray("cast","Robert Downey Jr.","Tom Holland","Chris Evans","Scarlett Johansson");
      echo "<ul>";
      $avengers -> get("cast", "persone");
      echo "</ul>";
  echo "</ul>";


//  New Instance Object
  $batman = new Movies("The Batman", "DC Film");
  echo "<h2>" . $batman -> name . "</h2>";
  echo "<ul>";
    echo "<li>" . $batman -> filmProductionCompany . "</li>";
    echo "<li>" . $batman -> language = "En" . "</li>";
    echo "<li>Genres:</li>";
    $batman -> setArray("genres","Action", "Drama", "SuperHero", "Adventure", "Crime Film", "Mystery");
      echo "<ul>";
      $batman -> get("genres", "gerne");
      echo "</ul>";
    $batman -> setVote(7);
    $batman -> getVote();
    echo "<li>Cast</li>";
    $batman -> setArray("cast","Robert Pattinson","Zoë Kravitz","Paul Dano","Colin Farrell");
      echo "<ul>";
      $batman -> get("cast", "persone");
      echo "</ul>";
  echo "</ul>";



