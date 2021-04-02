<?php 

function grading() {
  $mtk = 80;
  $bahasIndonesia = 90;
  $bahasaInggris = 89;
  $ipa = 69;

  $avg = ($mtk + $bahasIndonesia + $bahasaInggris + $ipa)/4;
  
  if ($avg >= 90) {
    $grade = "A"; 
  } else if ($avg >= 80){
    $grade = "B";
  } else if ($avg >= 70) {
    $grade = "C";
  } else if ($avg >= 60) {
    $grade = "D";
  } else {
    $grade = "E";
  }

  echo("Rata-rata = $avg");
  echo("<br/>");
  echo("Grade = $grade");

}



grading();