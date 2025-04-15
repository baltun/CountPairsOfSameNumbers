<?php
    function countOfSameNumberPairs($numbers)
    {
        $numbersLength = count($numbers);
        $countOfSameNumberPairs = 0;

        for ($i = 0; $i < $numbersLength - 1; $i++) {
            if ($numbers[$i] === $numbers[$i+1]) {
                $countOfSameNumberPairs++;
                $i++; // пропускаем следующий элемент, т.к. он уже учтен как элемент найденной пары одинаковых чисел
            }
        }

        return $countOfSameNumberPairs;
    }

    $numbers = [1, 1, 2, 3, 4, 3, 4, -51, 12, 7, 7, 12, 12, 4, 3, -51, -51, -51, -51];
    $count = countOfSameNumberPairs($numbers);
    echo
        'Количество последовательных пар одинаковых чисел: ' . PHP_EOL .
        $count . PHP_EOL;
