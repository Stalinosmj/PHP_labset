<?php  
//if(isset($_POST['calculate']))  

 $number1 = $_POST['number1'];  
 $number2 = $_POST['number2'];
 $op = $_POST['op'];

 
if ($op=='+')
	{
	  $ans =  $number1+$number2;     
 	  echo "The sum of $number1 and $number2 is: ".$ans; 
   	}
 elseif ($op=='-')
	{
	  $ans =  $number1-$number2;     
 	  echo "The difference of $number1 and $number2 is: ".$ans; 
	}
 elseif ($op=='*')
	{
	  $ans =  $number1*$number2;     
 	  echo "The product of $number1 and $number2 is: ".$ans; 
	}
 elseif ($op=='/')
	{
	  $ans =  $number1/$number2;     
 	  echo "The quotient of $number1 and $number2 is: ".$ans;   
	}
 else 
	echo "INVALID OPERATION";



?> 
