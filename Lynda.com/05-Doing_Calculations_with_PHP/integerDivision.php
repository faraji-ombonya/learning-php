<?php

//convert $total_minutes to hours and minutes
//solution


$total_minutes = 318;
$minutes = $total_minutes % 60;

$hours = (int)floor($total_minutes/60); // use floor() function to get float value, use (int) to cast result into integer 

echo "Time taken was $hours hours $minutes minutes".'<br>';



//alternative method to get hours
$hours = ($total_minutes - $minutes) / 60 ; // subtract the remaining minutes from the total minutes to get a number divisible by 60
echo "Time taken was $hours hours $minutes minutes".'<br>';
?>