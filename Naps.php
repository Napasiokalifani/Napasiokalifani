<?php 
$Name=readline ("Insert your name please: ");
$DOB=readline ("Insert your date of birth: ");
$home_address =readline ("Insert your home address: ");
$birthyear=(int)readline("Insert your birth year: ");
$current_year=(int)readline("Insert your  current year: ");
$age=$current_year-$birthyear;
print"Your most welcome home {$Name} and  now your
{$age} years old";
?>
