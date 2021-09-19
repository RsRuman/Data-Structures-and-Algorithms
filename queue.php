<?php
 class Queue{

    public $arrays = array();
    public $size = 2;

    public function myArray(){
      foreach ($this->arrays as $a){
        echo $a.",  ";
      }
    }

    public function enqueue($data){
      if(count($this->arrays) < $this->size){
        array_push($this->arrays, $data);
      }
      else{
        echo "Array Overflow!  can't add: ".$data."   ";
      }
    }

    public function dequeue(){
      if(empty($this->arrays)){
        echo "Array Underflow!    ";
      }
      else{
        array_shift($this->arrays);
      }
    }
  }

  $queue = new Queue();

  //enqueue elements to the arrays.
  $queue->enqueue(5);
  $queue->enqueue(6);
  echo "After enqueued two elements.   ";

  //After enqueued two elemements from the arrays.
  $queue->myArray();

  //dequeue a element from the arrays
  $queue->dequeue();
  echo "After dequeued one element.   ";

  //After dequeued one elemement from the arrays.
  $queue->myArray();

?>
