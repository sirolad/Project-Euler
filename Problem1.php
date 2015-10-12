<?php

/**
 * This snippet is a solution to the Problem 1 of ProjectEuler.com
 * I am using this to help my problem solving skill.
 */

$sum = 0;
for ($i=0; $i < 1000; $i++) {
    if (!($i % 3) || !($i % 5)) {
        $sum += $i;
    }
}

echo $sum;
