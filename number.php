<?php  


 $number = $_POST['number'];  
 $op = $_POST['operation'];

 
if ($op=='palindrome')
	{
	  $original = $number;
	  $reversed = 0;
	  while ($number != 0) 
	  {
       		 $remainder = $number % 10;
       		 $reversed = $reversed * 10 + $remainder;
      	 	 $number=$number/10;
    	  }
	  if ($original == $reversed)
          echo "$original is a palindrome.";
    	  elseif ($original != $reversed)
          echo "$original is not a palindrome.";
	  else 
	  echo "not working";
   	}
 elseif ($op=='armstrong')
	{
	  $original =$number;
	  $result = 0;
	  while ($original != 0) 
	  {
      		$remainder = $original % 10;
        
       		$result += $remainder * $remainder * $remainder;
        	$original /= 10;
    	  }

    		if ($result == $number)
        	echo "$number is an Armstrong number.";
    		else
        	echo "$number is not an Armstrong number.";

	}

 elseif ($op=='prime')
	{
	  $flag = 0;
	  if ($number == 0 || $number == 1)
    	  $flag = 1;

	  for ($i = 2; $i <= $number / 2; ++$i) 
	{

 
    		if ($number % $i == 0) 
	      {
      		$flag = 1;
     	 	break;
    	       }
  	}

 
  	  if ($flag == 0)
    	  echo "$number is a prime number.";
 	  else
          echo "$number is not a prime number.";
	
	
	}

 else 
	echo "INVALID OPERATION";



?> 
