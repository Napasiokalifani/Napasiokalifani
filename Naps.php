<?php 
$Name=readline ("Insert your name please: ");
$DOB=readline ("Insert your date of birth: ");
$homeaddress =readline ("Insert your home address: ");
$birthyear=(int)readline("Insert your birth year: ");
$currentyear=(int)readline("Insert your  current year: ");
$age=$currentyear-$birthyear;
print"Your most welcome home {$Name} and  now your
{$age} years old";
?>
