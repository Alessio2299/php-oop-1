<?php
  class Movies{
    public $name;
    public $filmProductionCompany;
    public $language;
    public $vote;
    public $cast;
  
    public function __construct($_name, $_company){
      $this -> name = $_name;
      $this -> filmProductionCompany = $_company;
    }
    public function getPrintVote($_vote){
      if(is_numeric($_vote)){
        $this -> vote = $_vote;
        echo "<li>" . $this -> vote . "</li>";
      }else{
        echo "<li>Is not a Number</li>";
      }
    }
    public function getPrintCast(...$actor){
      $this -> cast = $actor;
      foreach($this -> cast as $person){
        echo "<li>" . $person . "</li>";
      }
    }
  }

  $avengers = new Movies("Avengers: EndGame", "Marvel");
  echo "<h2>" . $avengers -> name . "</h2>";
  echo "<ul>";
    echo "<li>" . $avengers -> filmProductionCompany . "</li>";
    echo "<li>" . $avengers -> language = "En" . "</li>";
    $avengers -> getPrintVote(8);
    echo "<li>Cast</li>";
      echo "<ul>";
      $avengers -> getPrintCast("Robert Downey Jr.","Tom Holland","Chris Evans","Scarlett Johansson");
      echo "</ul>";
  echo "</ul>";

  $batman = new Movies("The Batman", "DC Film");
  echo "<h2>" . $batman -> name . "</h2>";
  echo "<ul>";
    echo "<li>" . $batman -> filmProductionCompany . "</li>";
    echo "<li>" . $batman -> language = "En" . "</li>";
    $batman -> getPrintVote(7);
    echo "<li>Cast</li>";
      echo "<ul>";
      $batman -> getPrintCast("Robert Pattinson","Zoë Kravitz","Paul Dano","Colin Farrell");
      echo "</ul>";
  echo "</ul>";



