<?php
// 練習1
echo 'ーーー練習1ーーー'. '<br>';
echo 'Hello,' . 'world!' . '<br>';

// 練習2
echo 'ーーー練習2ーーー'. '<br>';
echo 5*3 . '<br>';
echo 8/2 . '<br>';
echo 3+6 . '<br>';
echo 5-2 . '<br>';
echo 7%3 . '<br>';

// 練習3
// $数字　だとエラーになる（先頭に数字があかん）
echo 'ーーー練習3ーーー'. '<br>';
$var = '変数の値を出力します';
echo $var . '<br>';

// 練習4
// お問い合わせフォームにおいて、確認メールの内容の文章を作るときに使いやすい
// . が抜けて再代入になっていないか注意
echo 'ーーー練習4ーーー'. '<br>';
$var = 'この文字列と';
$var .= 'この文字列を';
$var .= '繋げます';
echo $var . '<br>';

// -------データ型について(JSもPHPもほぼ同じ)-------
// 文字列型(String)  ex) 'Hello'
// 整数型(Integer)  ex) 0, 1, 987, -1
// 浮動小数点数型(double)  ex) 0.5, 3.14, -2.7
// 論理型(boolean)  ex) true false のみ
// 配列型(array)  ex) ['みかん', 'りんご', 'ばなな'...]
// オブジェク型(object)  ex) XMLRequest (JSで先頭に new がついて使われていたもの)

// 練習5　データ型（超重要）
// データ型によっては、一度代入した変数に別のデータが代入されるとエラーになるものがある
echo 'ーーー練習5ーーー'. '<br>';
$var = 5;
echo $var . '<br>';
$var = '文字列に上書き';
echo $var . '<br>';

// 練習6
// 変数展開は既視感あればOK（軽く記憶）
//変数展開はダブルクオンテーション
echo 'ーーー練習6ーーー'. '<br>';
$color = 'red';
echo "My ${color} car was stolen." . '<br>';

// 制御文if文
// 練習7
echo 'ーーー練習7ーーー'. '<br>';
$var = 11;
if ($var > 10) {
    echo '10より大きい数値です。' . '<br>';
}

// 練習8 （論理積）
echo 'ーーー練習8ーーー'. '<br>';
$var = 23;
if ($var >= 20 && $var < 30) {
    echo '20代です。' . '<br>';
}

// 練習9
echo 'ーーー練習9ーーー'. '<br>';
$var = 32;
if ($var >= 20 && $var < 30) {
    echo '20代です。';
} else {
    echo '20代ではありません。';
}
echo '<br>';

// 練習10 
// 条件A || 条件B　条件Aか条件Bを満たしていたら　（論理和）
echo 'ーーー練習10ーーー'. '<br>';
$var = 19;
if ($var >= 20 && $var < 30) {
    echo '20代です。';
} elseif ($var >= 30 && $var < 40) {
    echo '30代です。';
} else {
    echo '20代または30代ではありません。';
}
echo '<br>';

// 練習問題　
// 10代、20代、30代の判定ができるif文　「〇〇さんは、○代です」
$friends = ['name' => 'seedくん', 'area' => 'セブ島', 'gender' => 1, 'age' => 13,];
$friends['name'] = 'リオさん';
$friends['age'] = 24;
$var = $friends['age'];
if ($var >=10 && $var < 20) {
    echo $friends['name'] . 'は10代です。' . '<br>';
} elseif ($var >=20 && $var < 30) {
    echo $friends['name'] . 'は20代です。' . '<br>';
} elseif ($var >=30 && $$var < 40) {
    echo $friends['name'] . 'は30代です。' . '<br>';
} else {
    echo $friends['name'] . 'は40代以上です。' . '<br>';
}

// 練習11
echo 'ーーー練習11ーーー'. '<br>';
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
echo 'ーーー練習12ーーー'. '<br>';
$var = 0;

while ($var < 10) {
    echo $var . '<br>';
    $var++;
}

// 練習13
echo 'ーーー練習13ーーー'. '<br>';
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

// 練習問題
$fruits = ['banana', 'mango', 'apple', 'watermelon'];
// 配列.length(JavaScript)とcount(配列)は同じ要素数を取得する
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . '<br>';
}

// 練習14
// 配列の要素数を取得　→ count(配列) 
// 配列の中身を確認　→　var_dump(配列)
echo 'ーーー練習14ーーー'. '<br>';
$fruits = ['りんご', 'みかん', 'ばなな'];
$fruits[] = 'なし';
echo $fruits[count($fruits) - 1] . '<br>';
// 配列の要素数分だけ繰り返す(配列専用の繰り返し文)
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}

// 練習15
echo 'ーーー練習15ーーー'. '<br>';
$fruits = ['apple' => 'りんご', 'orange' => 'みかん', 'banana' => 'ばなな'];

foreach ($fruits as $key => $value) {
    echo $key . '=' . $value . '<br>';

    if ($key == 'orange') {
        echo $key . 'は' . $value . 'です。' . '<br>'; 
    }
}

// 連想配列
echo '------ 連想配列 ------' . '<br>';
$friends = ['friend_name' => 'seedくん', 'area' => 'セブ島', 'gender' => 1, 'age' => 3,];
echo $friends['friend_name'] . '<br>';
// 値を追加する
$friends['hobby'] = 'programming';
// 練習問題
// $friends($friends2)にペアの方の情報を入力し、hobbyを表示
$friends = ['friend_name' => 'リオさん', 'area' => '沖縄', 'gender' => 1, 'age' => 24, 'hobby' => 'バスケ'];
echo $friends['hobby'] . '<br>';
//  チャレンジャー問題
// 情報を使って文章を組み立ててみましょう
echo $friends['friend_name'] . 'の趣味は' . $friends['hobby'] . 'です。' . '<br>';
// 二次元配列の場合
$teacher1 = ['name' => 'かん先生', 'area' => '香川', 'age' => 24,];
$teacher2 = ['name' => 'いけあつ先生', 'area' => '千葉', 'age' => 29,];
// 先生の情報が二次元配列になる
$teachers = [$teacher1,$teacher2];
echo $teachers[0]['name'] . '<br>';


// 演習問題1
// 問題1
echo 'ーーー問題1ーーー'. '<br>';
for ($i = 100; $i >= 1; $i--) {
    echo $i . '<br>';
}

// 問題2
echo 'ーーー問題2ーーー'. '<br>';
for ($i = 1; $i <= 9; $i++) {
    echo $i * 3 . ' ';
}
echo '<br>';

// 問題3
echo 'ーーー問題3ーーー'. '<br>';
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
echo 'ーーー問題4ーーー'. '<br>';
for ($i = 1; $i <= 100; $i++) {
    echo $i . ' ';
    if ($i % 10 === 0) {
        echo '<br>';
    }
}

// 問題5
echo 'ーーー問題5ーーー'. '<br>';
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
$i = 0;
foreach ($alpha as $b) {
    if ($b === 'A') {
        $i++;
    }
}
echo $i . '<br>';

// 問題6
echo 'ーーー問題6ーーー'. '<br>';
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
echo 'ーーー問題7ーーー'. '<br>';
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++){
        $res = $i * $j . '';
        echo $res;
    }
    echo '<br>';
}

// 問題8
echo 'ーーー問題8ーーー'. '<br>';
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