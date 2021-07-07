<?php

namespace FRUnitTest\BinarySearch;

use PHPUnit\Framework\TestCase;
use FR\BinarySearch\BinarySearchUtil;

class BinarySearchUtilTest extends TestCase
{
    /**
     * @test
     * @covers FR\BinarySearch\BinarySearchUtil::binarySearch
     * 
     * @return void
     */
    public function binarySearch()
    {
        $test = [
            [
                'needle' => '0',
                'haystack' => [
                    ['id' => '1'],
                    ['id' => '2'],
                    ['id' => '3']
                ],
                'key' => 'id'
            ],
            [
                'needle' => 2,
                'haystack' => [
                    ['id' => '1'],
                    ['id' => '2'],
                    ['id' => '3']
                ],
                'key' => 'id'
            ],
            [
                'needle' => '3',
                'haystack' => [
                    ['id' => '1'],
                    ['id' => '2'],
                    ['id' => '3'],
                    ['id' => '3']
                ],
                'key' => 'id'
            ]
        ];

        foreach ($test as $i => $param) {
            $results = BinarySearchUtil::binarySearch(
                $param['needle'],
                $param['haystack'],
                $param['key']
            );

            $this->assertIsArray($results);

            if (in_array($i, [0])) {
                $this->assertEmpty(@$results);
            }

            if (in_array($i, [1, 2])) {
                $this->assertNotEmpty(@$results);
                foreach ($results as $kk => $vv) {
                    $this->assertArrayHasKey('id', @$vv);
                    $this->assertEquals($param['needle'], @$vv['id']);
                }
            }
        }
    }
}
