<?php

class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi, $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getLastname() {
    return $this->lastname;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    $about = "<h2>A few words about my family.</h2><br>";
    $about.="My name is: ".$this->getName();
    $about.=" My last name is: ".$this->getLastname();
    $about.="<br>My father is: ".$this->getFather()->getName();
    $about.="<br>My mother is: ".$this->getMother()->getName();
    $about.="<br>Mother my mother is: ".$this->getMother()->getMother()->getName();
    $about.="<br>Father my mother is: ".$this->getMother()->getFather()->getName();
    $about.="<br>Mother my father is: ".$this->getFather()->getMother()->getName();
    $about.="<br>Father my father is: ".$this->getFather()->getFather()->getName();
    return $about;
  }
}
// Здоровье человека не может быть больше 100 единиц

$igor = new Person("Igor", "Smirnov", 75);//дедушка по папиной линии
$oleg = new Person("Oleg", "Petrov", 76);//дедушка по маминой линии
$marina = new Person("Marina", "Smirnova", 74);
$olga = new Person("Olga", "Petrova", 73);

$ivan = new Person("Ivan", "Ivanov", 45, $marina, $igor);
$irina = new Person("Irina", "Ivanova", 42, $olga, $oleg);

$kuzya = new Person("Kuzya", "Ivanov", 12, $irina, $ivan);

echo $kuzya->getInfo();

//Создать 2 дедушки и 2 бабушки
?>