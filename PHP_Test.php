<?php
 $txt = "Hello World";
 $x = 5;
 $y = 10.5;
 echo $txt. "<br>";
 echo $x. "<br>";
 echo $y. "<br>";
?>
<br>
<?php
  define ("MINSIZE", 50);
  echo MINSIZE. "<br>";
  echo constant ("MINSIZE"); // Same thing as the previous line
?>
<br>
<?php
 // Valid constant names
 define ("ONE", "first thing");
 define ("TWO2", "second thing");
 define ("THREE_3", "third thing");
  echo ONE. "<br>";
  echo TWO2. "<br>";
  echo THREE_3. "<br>";
?>
<br>
<?php
 $t = date("H");
  if ($t < "30") {
      echo "Have a good day!";
  }
?>
<br>
<?php
 $t = date("H");
  if ($t < "20") {
      echo "Have a good day!";
  } else {
      echo "Have a good night!";
  }
  ?>
  <br>
  <?php
   $t = date("H");
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < 20) {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>
    <br>
    <?php
     $favcolor = "red";
      switch ($favcolor) {
          case "red":
           echo "Your favourite color is red!";
            break;
          case "blue":
           echo "Your favourite color is blue!";
            break;
          case "green":
           echo "Your favourite color is green!";
          default:
           echo "Your favourite color is neither red, blue nor green!";
      }
    ?>
    <br>
    <?php
     $favcolor = "pink";
      switch ($favcolor) {
          case "red":
           echo "Your favourite color is red!";
            break;
          case "blue":
           echo "Your favourite color is blue!";
            break;
          case "green":
           echo "Your favourite color is green!";
          default:
           echo "Your favourite color is neither red, blue nor green! It's pink!!";
      }
    ?>
    <br>
    <?php
     $x = 1;
     while ($x<= 5) {
         echo "The number is: $x <br>";
         $x++;
     }
    ?>
    <br>
    <?php
      $x = 1;
      do {
          echo "The number is: $x <br>";
          $x++;
      } while ($x<= 5);
      ?>
    <br>
    <?php
      for($x = 0; $x <= 10; $x++) {
          echo "The number is: $x <br>";
      }
    ?>
    <br>
    <?php
      $i = 0;
      while ($i < 10) {
          $i++;
          if($i == 3) break;
      }
      echo ("Loop stopped at i = $i");
    ?>
    <br>
    <?php
      $array = array (1,2,3,4,5);
      foreach ($array as $value) {
          if ($value == 3) continue;
          echo "Value is $value <br>";
      }
    ?>