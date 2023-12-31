<?php
declare(strict_types=1);
function distance(string $strandA, string $strandB): int
{
    //checks for string length validation
    //string must be equal length or throw exception
    if (strlen($strandA) != strlen($strandB))
    {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
    //converts strings into arrays split by each letter
    $strandA = str_split($strandA);
    $strandB = str_split($strandB);
    //array_map creates a custom array or customizes each element of an array
    //array_map and an anonymous function allows
    //array_map here makes $a & $b to -> $strandA and $strandB for each element as an anonymous function that diff checks then compares to both $strandA and $strandB array elements
    $differences = array_map(function($a, $b) 
    {
        return ($a !== $b) ? 1 : 0;
    },  $strandA, $strandB);
    return array_sum($differences);
}
echo distance('abcdefg', 'abcdefd');
?>