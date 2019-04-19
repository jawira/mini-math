<?php

namespace Jawira\MiniMath;

/**
 * Class MathToolbox
 *
 * Small class with math related methods
 *
 * @package Jawira\MiniMath
 * @author  Jawira Portugal <dev@tugal.be>
 */
class MathToolbox
{
    /**
     * Sums two numbers
     *
     * @param float $a
     * @param float $b
     *
     * @return float
     */
    public function add(float $a, float $b)
    {
        return $a + $b;
    }

    /**
     * Returns true if $number is palindrome, and false otherwise
     *
     * @param int $number
     *
     * @return bool
     */
    function isPalindrome(int $number): bool
    {
        return $number === (int)strrev($number);
    }

    /**
     * Removes elements that are not a positive number
     *
     * @param float[] $numbers
     *
     * @return array
     */
    public function positivesOnly(array $numbers): array
    {
        $positives = [];

        foreach ($numbers as $number) {
            if ($number >= 0) {
                $positives = $number;
            }
        }

        return $positives;
    }

    /**
     * Returns true if $number is odd number
     *
     * @param int $number
     *
     * @return bool
     */
    public function isOdd(int $number): bool
    {
        return $number % 2 === 1;
    }

    /**
     * Returns true if $number is even number
     *
     * @param int $number
     *
     * @return bool
     */
    public function isEven(int $number): bool
    {
        return !$this->isOdd($number);
    }
}
