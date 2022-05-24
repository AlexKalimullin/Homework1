<?php

abstract class AbstractClass { 
    
  abstract public function save();
  
  abstract public function new();  
    
  public function getName() { 
    return "random string. "; 
  } 
} 

class RealClass extends AbstractClass {
  public function save() {
    echo "class save implementation</br>";
  }
  
  public function new() {
    echo "class new implementation</br>";
  }
  
  public function getName() { 
    $parentInfo = parent::getName();
    return $parentInfo." Здорово!";
  }
}

$obj = new RealClass;
$obj->save();
$obj->new();
echo $obj->getName();

?>