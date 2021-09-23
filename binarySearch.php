<?php
function binarySearch(Array $array, $value){

  if(count($array) === 0){
    return false;
  }
  // Define high and low value
  $low = 0;
  $high = count($array) -1;

  // Checking low value with high, If low lower than or equal to high then will entering into the loop
  while($low <= $high){

    $mid = $low + ($high - $low)/2;

    // checking value, if true return true
    if($array[$mid] == $value){
      return true;
    }

    // checking value if value is greater
    elseif ($array[$mid] < $value) {
      $low = $mid + 1;
    }

    // checking value if value is lower
    else{
        $high = $mid - 1;
    }
}

}

// define an array
$array = array(1,2,3,4,6,7,8,9);

// checking binarySearch function return true or not? if true then execute the if statement or else statement
if( binarySearch($array, 2) == true){
    echo "Value exist in array.";
}
else{
    echo "Not Exist!";
}
?>
