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
    public function getVote($_vote){
      $this -> vote = $_vote;
    }
    public function getCast(...$actor){
      $this -> cast = $actor;
    }
  }

?>