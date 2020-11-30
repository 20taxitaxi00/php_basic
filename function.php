<?php
// 関数について
echo '---------- 関数について ----------' . '<br>';

// 関数で出てくる言葉は3つ　→　関数名　引数　戻り値
// 2つの数字を足した答えを返す関数
function plus($num1,$num2) {
    return $num1 + $num2;
    // echo $num1 + $num2（練習問題） →　答えを表示だけする。
    // returnは再利用できる（そのまま計算に使える等）のでいい
} 
echo plus(1,5) . '<br>';
echo 2 * plus(3,4) . '<br>';

// 組み込み関数issetについて
// isset(変数)で、変数の存在をチェックできる組み込み関数
// function isset(チェックしたい変数) {
//     if (チェックした変数があったら){
//         return true;
//     } else {
//         return false;
//     }
// }

