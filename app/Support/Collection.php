<?php
/**
  *author: Artem Rogov
  *project: Learn UnitTest for Collection
  *date: 20.05.18
*/
namespace App\Support;
use IteratorAggregate;
use ArrayIterator;

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
  public  function getIterator(){

    return new ArrayIterator($this->items);


  }
  public function add(array $items){

    $this->items = array_merge($this->items,$items);

  }
  public function merge(Collection $collection){

    //  return new Collection(array_merge($this->get(),$collection->get()));

    return $this->add($collection->get());
  }

  public function toJson(){


    return json_encode($this->items);

  }

}
