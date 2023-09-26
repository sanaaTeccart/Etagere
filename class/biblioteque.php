<?php
class biblioteque extends etagere
{   public $name ;
     public $price;
     public $shelfNb;

 
public function agrandirTaille($addedEtage){

 return $this->shelfNb +  $this->$addedEtage;
}

public function reduireTaille($supEtage){
    return $this->shelfNb- $this->$supEtage;
}


}


?>