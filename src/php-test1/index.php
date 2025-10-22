<?php
// 10人のリスト //
const PEOPLE = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];

$result1 = 0;
$result2 = 0;

// 10人分のループ //
foreach (PEOPLE as $person) {
    $number = rand(1, 100);
    if($number %2 == 0) {
        $result[] = array('name' => $person, 'fortune' => '大吉');
        $omikuji = '大吉';
        $result1 ++;
    }
    else {
        $result[] = array('name' => $person, 'fortune' => '大凶');
        $omikuji = '大凶';
        $result2 ++;
    }
    echo $person . "さんは" . $omikuji .'<br />';
}

// var_dump($result);

foreach ($result as $fortune) {
    echo $fortune['name'].'さんは'.$fortune['fortune'].'です。<br />';
}

$total = count(PEOPLE);

$date_time = new DateTime();
$time = $date_time->format('Y/m/d H:i:s');

echo $time .'<br />';
echo "大吉の確率".($result1 / $total) * 100 .'%';
echo '<br />';
echo "大凶の確率".($result2 / $total) * 100 .'%';







// ランダムな数字の生成 //


// 数字の偶数奇数の判定 //

// 大吉大凶の表示 名前と並べる //

// 大吉大凶の確率の表示 //