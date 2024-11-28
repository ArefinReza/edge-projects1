<?php

namespace App\classes;

class Series
{
    public function getNumberSeries($num1, $num2)
    {
        if ($num1 > $num2) {
            return range($num1, $num2, -1); // Descending order
        } else {
            return range($num1, $num2); // Ascending order
        }
    }

    public function getOddEvenSeries($num1, $num2, $type)
    {
        $series = $this->getNumberSeries($num1, $num2);

        // Filter the series based on type (odd or even)
        if ($type === 'odd') {
            return array_filter($series, fn($n) => $n % 2 !== 0);
        } elseif ($type === 'even') {
            return array_filter($series, fn($n) => $n % 2 === 0);
        }

        return [];
    }
}
