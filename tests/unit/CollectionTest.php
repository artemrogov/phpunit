<?php
/**
*Testing a collection class
*/
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase {
  /** @test */
  public function empty_instantiated_collection_returns_no_items(){
    $collection = new \App\Support\Collection;

    $this->assertEmpty($collection->get());
  }

  /** @test */
  public function count_is_correct_for_items_passed_in(){
      $collection = new \App\Support\Collection([
        'one','two','three'
      ]);
      $this->assertEquals(3,$collection->count());
  }
  /** @test */
  public function items_returnde_match_items_passed_in(){
    $collection = new \App\Support\Collection([
      'one','two'
    ]);
    $this->assertCount(2, $collection->get());
    $this->assertEquals($collection->get()[0],'one');
    $this->assertEquals($collection->get()[1],'two');
  }
  /** @test */

  public function collection_is_instance_of_iterator_aggregate(){
    $collection = new \App\Support\Collection();

    $this->assertInstanceOf(IteratorAggregate::class,$collection);

  }
  /* @test */
  public function collection_can_be_iterated(){
    
  }
}
