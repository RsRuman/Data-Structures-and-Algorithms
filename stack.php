<?php

  class Stack{

    public $arrays = array();
    public $size = 2;

    public function myArray(){
      foreach ($this->arrays as $a){
        echo $a.",  ";
      }
    }

    public function push($data){
      if(count($this->arrays) < $this->size){
        array_unshift($this->arrays, $data);
      }
      else{
        echo "Array Overflow!  can't add: ".$data."   ";
      }
    }

    public function pop(){
      if(empty($this->arrays)){
        echo "Array Underflow!    ";
      }
      else{
        array_shift($this->arrays);
      }
    }
  }

  $stack = new Stack();

  //pushing elements to the arrays.
  $stack->push(5);
  $stack->push(6);
  echo "After push two elements.   ";

  //After pushing two elemements from the arrays.
  $stack->myArray();

  //poping a element from the arrays
  $stack->pop();
  echo "After pop one element.   ";

  //After pop one elemement from the arrays.
  $stack->myArray();

?>
