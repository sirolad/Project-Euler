<?php

/**
 * This snippet is a solution to the Problem 1 of ProjectEuler.com
 * I am using this to help my problem solving skill.
 * Question:
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6
 * and 9. The sum of these * multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
*/

$sum = 0;
for ($i=0; $i < 1000; $i++) {
    if (!($i % 3) || !($i % 5)) {
        $sum += $i;
    }
}

echo $sum;
