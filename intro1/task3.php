<?php 

function printSegitiga($num) {
  if (getType($num) != "integer") {
    echo ("Data Harus Integer");
  }
  for ($i = $num; $i > 0 ; $i--) { 
    for($j = 1; $j <= $i; $j++) {
      echo("$j ");
    }
    echo("<br/>");
  }
}

printSegitiga(5);