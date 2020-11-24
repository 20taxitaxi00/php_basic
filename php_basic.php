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