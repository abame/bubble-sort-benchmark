<?php

class BubbleSort
{
    public static function sort($array)
    {
        $len = count($array);
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $len - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return $array;
    }
}

$randomNumberArray = range(0, 9999);
shuffle($randomNumberArray);

$start = microtime(true);
$sortArray = BubbleSort::sort($randomNumberArray);
$end = microtime(true);

echo "The code took " . ($end - $start) . " seconds to complete.";
