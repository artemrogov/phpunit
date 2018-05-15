<?php
namespace App\Support;
use IteratorAggregate;

class Collection implements IteratorAggregate {


  protected $items = [];

  public function __construct(array $items= []){
    $this->items = $items;
  }

  public function get(){

    return $this->items;
  }
  public function count(){

    return count($this->items);

  }
  public function getIterator(){

    return [];

    
  }
}
