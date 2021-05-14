 <?php
 //input and output
 echo "\n";
 $total = sum(2,3);
 echo ("\$total = " . $total . "\n");
 $total = sum(2,3,4);
 echo ("\$total = " . $total . "\n");
 $total = sum(2,3,4,5);
 echo ("\$total = " . $total . "\n");

 //funtion
 function sum(...$input) {
     $output = 0;
     foreach ($input as $value) {
         $output += $value;
     }
     return $output;
 }

?>