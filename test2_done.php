<?php
/**
 * Написать функцию которая из этого массива
 */
$data1 = [
    'old.new.next' => 1,
    'old.new.next2' => 2,
    'old2.new.super' => 'string',
    'old2.new.super2' => 'string',
    'old3.new2.super' => 'string',
    'old2.new2.position' => 10,
    'old2.new2.position2' => 10,
    'old3.new3.position' => 10,
];

function rewrap($arr)//сделает такой 
{
    $arr2 = array();
    foreach($arr as $k=>$v)
    {
        $newarr  = explode('.', $k);
        $tmp = &$arr2;
        foreach ($newarr as $segment) 
        {
            $tmp = &$tmp[$segment];
        }
        $tmp = $v;
    }
    return $arr2;
}

print_r(rewrap($data1));
echo '<br>';
echo '<br>';
echo '<br>';

//и наоборот

function restorearray($data){

$ritit = new RecursiveIteratorIterator(new RecursiveArrayIterator($data));
$result = array();
  foreach ($ritit as $leafValue) {
    $keys = array();
    foreach (range(0, $ritit->getDepth()) as $depth) {
        $keys[] = $ritit->getSubIterator($depth)->key();
    }
    $result[ join('.', $keys) ] = $leafValue;
  }
  return $result; 
}



$data = [
    'parent' => [
        'child' => [
            'field' => 1,
            'field2' => 2,
        ]
    ],
    'parent2' => [
        'child' => [
            'name' => 'test'
        ],
        'child2' => [
            'name' => 'test',
            'position' => 10
        ]
    ],
    'parent3' => [
        'child3' => [
            'position' => 10
        ]
    ],
];
print_r(restorearray($data));

