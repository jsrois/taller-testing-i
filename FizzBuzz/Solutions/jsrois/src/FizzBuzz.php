<?php
/**
 * Created by PhpStorm.
 * User: jsrois
 * Date: 26/5/17
 * Time: 12:37
 */

namespace FizzBuzz;

class FizzBuzz
{
    public function of($number) {
        if ($number == 3) {
            return "Fizz";
        }
        return (string) $number;
    }
}