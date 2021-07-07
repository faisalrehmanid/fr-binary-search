# What to do?

This library provide binary search implementation for 2D array

# How to use?

```
// What value to search e.g. '2'
$needle = '2';

// Search from array
$haystack = [
    ['id' => '1', 'name' => 'name_1'],
    ['id' => '2', 'name' => 'name_2'],
    ['id' => '3', 'name' => 'name_3']
];

// Search key from array. e.g. 'id' must be ASC sorted
$key = 'id';

// $results always will be array
$results = \FR\BinarySearch\BinarySearchUtil::binarySearch($needle, $haystack, $key);

echo '<pre>';
    print_r($results);
echo '</pre>';
```

# How to test?

To execute PHPUnit tests

1. Point to /vendor/bin dir `cd ./vendor/bin`
2. Execute PHPUnit tests: `phpunit --configuration ./../../tests/phpunit.xml`
3. To check phpunit version: `phpunit --version`
