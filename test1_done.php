<?php
/**
 * Нужно написать код, который из массива выведет то что приведено ниже в комментарии.
 */
$x = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

$newarr = array($x[0]=> '');
array_shift($x);

    foreach($x as $v)
        {
            $newarr = array($v => $newarr);
        }

$x = $newarr;

print_r($x);


/* Тоже самое, только обернуто в функцию

function rewrap($arr) 
{
    $newarr = array($arr[0]=> '');
    array_shift($arr);

    foreach($arr as $v)
        {
            $newarr = array($v => $newarr);
        }

    return $newarr;
}

print_r(rewrap($x));
*/

/*
print_r($x) - должен выводить это:
Array
(
    [h] => Array
        (
            [g] => Array
                (
                    [f] => Array
                        (
                            [e] => Array
                                (
                                    [d] => Array
                                        (
                                            [c] => Array
                                                (
                                                    [b] => Array
                                                        (
                                                            [a] =>
                                                        )

                                                )

                                        )

                                )

                        )

                )

        )

);*/
