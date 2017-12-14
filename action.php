<?php
	$seed=$_POST["seed"];
	$number=$_POST["number"];
	print "Random numbers are follows: <br>";
	
	for($x=1;$x<=$number;$x++)
	{ 
      $seedsquare=($seed*$seed); 
	  $length=strlen($seedsquare);
	  
	  if($length<8){
	  $number_of_zero=8-$length; 
	  $zero=str_repeat("0",$number_of_zero); //Round into 8 digits 
	  $seedsquare=$zero.$seedsquare;
	  
      $seed=substr($seedsquare,2,4);//4 digits Random Number  Ex:58 (5118) 80
	  echo ".".$seed."<br>";
	  }
	  else{
	  $seed=substr($seedsquare,2,4);
      echo ".".$seed."<br>";
    }
}
	
?>