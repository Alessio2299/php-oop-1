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
    public function getVote($_vote){
      if(is_numeric($_vote)){
        $this -> vote = $_vote;
      }else{
        $this -> vote = "Is not a Number";
      }
    }
    public function setVote(){
      echo "<li>" . $this -> vote . "</li>";
    }
    public function getGenre(...$_genres){
      $this -> genres = $_genres;
    }
    public function setGenre(){
      foreach($this -> genres as $genre){
        echo "<li>" . $genre . "</li>";
      }
    }
    public function getCast(...$actor){
      $this -> cast = $actor;
    }
    public function setCast(){
      foreach($this -> cast as $person){
        echo "<li>" . $person . "</li>";
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
    $avengers -> getGenre("Action", "SuperHero", "Science Fiction", "Adventure", "Fantasy");
      echo "<ul>";
      $avengers -> setGenre();
      echo "</ul>";
    $avengers -> getVote(8);
    $avengers -> setVote();
    echo "<li>Cast:</li>";
    $avengers -> getCast("Robert Downey Jr.","Tom Holland","Chris Evans","Scarlett Johansson");
      echo "<ul>";
      $avengers -> setCast();
      echo "</ul>";
  echo "</ul>";


//  New Instance Object
  $batman = new Movies("The Batman", "DC Film");
  echo "<h2>" . $batman -> name . "</h2>";
  echo "<ul>";
    echo "<li>" . $batman -> filmProductionCompany . "</li>";
    echo "<li>" . $batman -> language = "En" . "</li>";
    echo "<li>Genres:</li>";
    $avengers -> getGenre("Action", "Drama", "SuperHero", "Adventure", "Crime Film", "Mystery");
      echo "<ul>";
      $avengers -> setGenre();
      echo "</ul>";
    $batman -> getVote(7);
    $batman -> setVote();
    echo "<li>Cast</li>";
    $batman -> getCast("Robert Pattinson","Zoë Kravitz","Paul Dano","Colin Farrell");
      echo "<ul>";
      $batman -> setCast();
      echo "</ul>";
  echo "</ul>";



