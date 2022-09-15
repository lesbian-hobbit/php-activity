<?php 
 echo "Twinkle, Twinkle little star\n";
  
 $twi = "Twinkle"; 
 $str = "star"; 
 echo "$twi, $twi little $str \n"; 
  
 $twi = "shining"; 
 $str = "planet"; 
 echo "$twi, $twi little $str";
 ?>   

<?php
 $x = 10; 
 $y = 7; 
  
 $ANS = $x + $y; 
 echo " $x + $y = $ANS \n";  
 $ANS = $x - $y; 
 
 echo " $x - $y = $ANS \n";   
 $ANS = $x * $y; 
 
 echo " $x * $y = $ANS \n";   
 $ANS = $x / $y; 
 
 echo " $x / $y = $ANS \n";   
 $ANS = $x % $y; 
 
 echo " $x % $y = $ANS \n";   
 ?>   

<?php   
 $variable = 8; 
 echo "Value is now $variable. \n";    
 $variable += 2; 
 echo "Add 2. Value is now $variable. \n";    
 $variable -= 4; 
 echo "Subtract 4. Value is now $variable. \n";   
 $variable *= 5; 
 echo "Multiply by 5. Value is now $variable. \n";   
 $variable /= 3; 
 echo "Divide by 3. Value is now $variable. \n";   
 $variable++; 
 echo "Increment value by one. Value is now $variable. \n";   
 $variable--; 
 echo "Decrement value by one. Value is now $variable.";   
 ?> 
 
 <?php   
 $Name = 'Harry'; 
 $Age = 28;   
  
 var_dump($Name); 
 print_r($Name); 
 
 echo "\n";   
 var_dump($Age);
 
 $Name=null; 
 var_dump($Name); 
 ?> 
