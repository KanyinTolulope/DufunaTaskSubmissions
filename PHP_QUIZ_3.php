<?php
 $t = 0;

  if ($t <= 20) {
      echo "It is really cold today";
  } elseif ($t < 30) {
      echo "The weather is just perfect";
  } elseif ($t < 40) {
      echo "It's so hot today";
  } elseif ($t >= 40) {
      echo "Am I in the Sahara Desert";
  } else {
      echo "";
  }
?>