<?php
// 練習1
echo 'Hello,' . 'world!';
echo '<br>';

// 練習2
echo 5*3 . '<br>';
echo 8/2 . '<br>';
echo 3+6 . '<br>';
echo 5-2 . '<br>';
echo 7%3 . '<br>';

// 練習3
$var = '変数の値を出力します';
echo $var;
echo '<br>';

// 練習4
$var = 'この文字列と';
$var = 'この文字列を';
$var = '繋げます';
echo $var;
echo '<br>';

// 練習5
$var = 5;
echo $var . '<br>';
$var = '文字列に上書き';
echo $var . '<br>';

// 練習6
$color = 'red';
echo "My ${color} car was stolen.";
echo '<br>';

// 練習7
$var = 11;
if ($var > 10) {
    echo '10より大きい数値です。';
}
echo '<br>';

// 練習8
$var = 23;
if ($var >= 20 && $var < 30) {
    echo '20代です。';
}
echo '<br>';

// 練習9
$var = 32;
if ($var >= 20 && $var < 30) {
    echo '20代です。';
} else {
    echo '20代ではありません。';
}
echo '<br>';

// 練習10
$var = 19;
if ($var >= 20 && $var < 30) {
    echo '20代です。';
} elseif ($var >= 30 && $var < 40) {
    echo '30代です。';
} else {
    echo '20代または30代ではありません。';
}
echo '<br>';

// 練習11
$var = 'male';

switch ($var) {
    case 'male':
        echo '男性です。';
        break;
    case 'female';
        echo '女性です。';
        break;
    default:
        echo '?';
        break;
}
echo '<br>';

// 練習12
$var = 0;

while ($var < 10) {
    echo $var . '<br>';
    $var++;
}

// 練習13
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

// 練習14
$fruits = ['りんご', 'みかん', 'ばなな'];

foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}

// 練習15
$fruits = ['apple' => 'りんご', 'orange' => 'みかん', 'banana' => 'ばなな'];

foreach ($fruits as $key => $value) {
    echo $key . '=' . $value . '<br>';
}

// 演習問題1
// 問題1
for ($i = 100; $i >= 1; $i--) {
    echo $i . '<br>';
}

// 問題2
for ($i = 1; $i <= 9; $i++) {
    echo $i * 3 . ' ';
}
echo '<br>';

// 問題3
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    } else {
        echo $i;
    }
    echo '<br>';
}

// 問題4
for ($i = 1; $i <= 100; $i++) {
    echo $i . ' ';
    if ($i % 10 === 0) {
        echo '<br>';
    }
}

// 問題5
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
$i = 0;
foreach ($alpha as $b) {
    if ($b === 'A') {
        $i++;
    }
}
echo $i . '<br>';

// 問題6
$english = 70; //英語の点数
$math = 70; //数学の点数
$total = $english + $math;

if ($english >= 60 && $math >= 60 && $total >= 140) {
    echo '合格！';
} else {
    echo '残念！';
}
echo '<br>';

// 問題7
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++){
        $res = $i * $j . '';
        echo $res;
    }
    echo '<br>';
}

// 問題8
$primeNumbers = [];
for ($i = 2; $i < 100; $i++) {
    for ($j =2; $j <= $i; $j++) {
        if ($i % $j === 0 && $j < $i) {
            break;
        }

        if ($i === $j) {
            $primeNumbers[] = $i;
        }
    }
}
print_r($primeNumbers);