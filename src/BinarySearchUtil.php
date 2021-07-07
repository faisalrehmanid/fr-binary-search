<?php

namespace FR\BinarySearch;

class BinarySearchUtil
{
    /**
     * Search from already sorted 2D array
     *
     * @param string $needle What value to search e.g. '2'
     * @param array $haystack Search from array. It must be like
     * [
     *      ['id' => '1', 'name' => 'name_1'],
     *      ['id' => '2', 'name' => 'name_2'],
     *      ['id' => '3', 'name' => 'name_3'],
     * ]
     * @param string $key Search key from array. e.g. 'id' must be ASC sorted
     * @return array e.g. [['id' => '2', 'name' => 'name_2']]
     */
    public static function binarySearch($needle, $haystack, $key)
    {
        if ($haystack[0][$key] == $needle)
            $high = 0;
        else {
            $high = count($haystack);
            $low = 0;

            while ($high - $low > 1) {
                $probe = floor(($high + $low) / 2);
                if ($haystack[$probe][$key] < $needle) {
                    $low = $probe;
                } else {
                    $high = $probe;
                }
            }

            if ($high == count($haystack) || $haystack[$high][$key] != $needle) {
                return [];
            } else {
                $high;
            }
        }

        $results = [];
        while (true) {
            if (isset($haystack[$high]) && $haystack[$high][$key] == $needle) {
                $results[] = $haystack[$high];
                $high++;
            } else
                break;
        }

        return $results;
    }
}
