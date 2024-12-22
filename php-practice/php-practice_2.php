<?php
// Q1 tic-tac問題
// 1から100までの数字について以下の条件に沿って表示
/*
1から100までの数字について処理を実行
4の倍数のときは tic を出力
5の倍数のときは tac を出力
4の倍数かつ5の倍数のときは tic-tac を出力
上記以外の数のときはそのままその数字を出力
*/

echo '1から100までのカウントを開始します'."\n\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo 'tic-tac'."\n";
    } else if ($i % 4 === 0) {
        echo 'tic'."\n";
    } else if ($i % 5 === 0) {
        echo 'tac'."\n";
    } else {
        echo $i."\n";
    }
}

// Q2 多次元連想配列

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

var_dump($personalInfos);

echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。'."\n";

foreach($personalInfos as $key1 => $value1) {
    for(i = 0; i <= 2; i++) {
        echo $value1[i];
    }
}

// Q3 オブジェクト-1

// Q4 オブジェクト-2


// Q5 定義済みクラス
?>