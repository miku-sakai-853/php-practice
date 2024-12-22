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

foreach($personalInfos as $key => $value) {
    $key = $key + 1;
    echo $key.'番目の'.$value['name'].'のメールアドレスは'.$value['mail'].'で、電話番号は'.$value['tel'].'です。'."\n";
}

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo $this->studentName.'はPHPの授業に参加しました。学籍番号：'.$this->studentId;
    }
}

$yamada = new Student(120, '山田');

echo '学籍番号'.$yamada->studentId.'番の生徒は'.$yamada->studentName.'です。';

// Q4 オブジェクト-2

$yamada->attend('PHP');


// Q5 定義済みクラス
// 問題1
date_default_timezone_set('Asia/Tokyo');
$today = new DateTime('now');
$last_month = $today->modify('-1 month')->format('Y-m-d');
echo $last_month;

// 問題2
date_default_timezone_set('Asia/Tokyo');
$today = new DateTime('now');
$day = new DateTime('1992-4-25');
$diff = $day->diff($today);
echo $diff->format('あの日から%a日経過しました。');

?>