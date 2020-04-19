<?php

 $threesError = "Można dać tylko 1 raz 3 gwiazdki";
 $twosError = "Można dać tylko 1 raz 2 gwiazdki";
 $onesError = "Można dać tylko 1 raz 1 gwiazdkę";
 $notSubmitAnyValueError = "Nic nie oceniłeś/nie oceniłaś.";
 $isSubmitCorrect = false;
 $countThrees = 0;
 $countTwos = 0;
 $countOnes = 0;

 foreach ($_POST as $value) {
   if($value == 3) {
     $countThrees++;
   }
   if($value == 2) {
     $countTwos++;
   }
   if($value == 1) {
     $countOnes++;
   }
 }

 if($countThrees != 1) {
     $nameErr = "<div class='alert alert-danger' role='alert'>" . $threesError . "</div>";
 }
 if($countTwos != 1) {
    $nameErr = "<div class='alert alert-danger' role='alert'>" . $twosError . "</div>";
}
if($countOnes != 1) {
    $nameErr = "<div class='alert alert-danger' role='alert'>" . $onesError . "</div>";
}

if($countThrees == 0 && $countTwos == 0 && $countOnes == 0){
    $nameErr = "<div class='alert alert-danger' role='alert'>" . $notSubmitAnyValueError . "</div>";
    $isSubmitCorrect = false;
}

if($countThrees == 1 && $countTwos == 1 && $countOnes == 1){
    $isSubmitCorrect = true;
}
