<?php

class Animal
{
  public $animals = array();

  
  public function __construct($data)
  {
    $this->animals = $data;
  }

 
  public function index()
  {
    foreach($this->animals as $hewan){
        echo "</br> $hewan";
    }
  }


  public function store($data)
  {
     array_push($this->animals,$data);
  }

  public function update($index, $data)
  {
    $this->animals = array_replace($this->animals,[$index=>$data]);
  }


  public function destroy($index)
  {
    unset($this-> animals[$index]);
  }
}


$animal = new Animal(["ayam","ikan","kecoa"]);



$animal->index();
echo "<br>";


$animal->store("burung");
$animal->index();
echo "<br>";

$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";


$animal->destroy(1);
$animal->index();
echo "<br>";