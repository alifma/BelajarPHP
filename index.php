<?php

$array1 = [
  "fruits" => [
  "apple",
  "manggo",
  "pineapple"
  ],
  "hobbies" => [
  "football",
  "swiming",
  "basketball"
  ]
  ]; 

foreach ($array1 as $key => $value) {
  for ($i = 0; $i < count($key); $i++) {
    echo($array1[$key][$value]);
  }
  # code...
}