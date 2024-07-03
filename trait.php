<?php


trait oil {
    function oil(){echo "this is from oil";}
}

trait engine {
use oil;
  function engine(){echo "this is from engine";}
}

class car{
    use engine;
 function car(){echo "this is from car";}
}

class bmw extends car{
      
}

$obj = new bmw;
$obj->oil();
?>