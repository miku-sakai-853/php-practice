<?php
// Q1 変数と文字列
// 変数に自分の苗字を格納し、文字列結合を使って出力

$name = '坂井';
echo '私の名前は「'.$name.'」です。'."\n";

// Q2 四則演算
// $numという変数に5 と 4 をかけた値を格納して出力
// さらにその値を2で割った結果を出力

$num = 5 * 4;
echo $num."\n";
$num = $num / 2;
echo $num;

// Q3 日付操作
// PHPのdate関数を使って現在時刻を取得し、文字列結合を使用して出力

echo '現在時刻は、'.date('Y年m月d日 H時i分s秒').'です。'."\n";

// Q4 条件分岐-1 if文
// 下記の条件のもとで文字列を出し分ける処理をif文を使って作成
/*
$deviceに任意の文字列を格納
$deviceの値が「windows」なら「使用OSは、windowsです。」と表示
$deviceの値が「mac」なら「使用OSは、macです。」と表示
$deviceの値が上記2つ以外なら「どちらでもありません。」と表示
但し、ifとelseのみを使用する（else ifは使用しない）
*/

$device = 'windows';
if ($device !== 'windows' && $device !== 'mac') {
    echo 'どちらでもありません。'."\n";
} else {
    echo '使用OSは、'.$device.'です。';
}

// Q5 条件分岐-2 三項演算子
// $ageという変数に任意の数値を格納し、下記の条件のもとで文字列を出し分ける処理を三項演算子を使って作成
/*
$ageが18未満なら「未成年です。」と表示
$ageが18以上なら「成人です。」と表示
*/

$age = 17;
$message = ($age < 18) ? '未成年です。'."\n" : '成人です。'."\n";
echo $message;

// Q6 配列
// 関東の都・県を格納した配列を作成し、3番目と4番目の値を出力

$prefectures = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];
echo $prefectures[2].'と'.$prefectures[3].'は関東地方の都道府県です。'."\n";

// Q7 連想配列-1
// 関東の都・県をキー、それぞれの県庁所在地をバリューとする連想配列を作成し、バリューを全て表示

$capital = ['東京都' => '新宿区',
            '神奈川県' => '横浜市',
            '千葉県' => '千葉市',
            '埼玉県' => 'さいたま市',
            '栃木県' => '宇都宮市',
            '群馬県' => '前橋市',
            '茨城県' => '水戸市'];

foreach ($capital as $key => $value) {
    echo $value."\n";
}

// Q8 連想配列-2
// 上記で作成した連想配列とif文を使用して「埼玉県の県庁所在地は、さいたま市です。」のみを出力

foreach ($capital as $key => $value) {
    if ($key == '埼玉県') {
        echo $key.'の県庁所在地は、'.$value.'です。'."\n";
        break;
    } else {
        continue;
    }
}

// Q9 連想配列-3
// 上記で作成した連想配列に、関東以外の都道府県を2つ追加
/*
関東地方以外の都道府県については、「〜は関東地方ではありません。」と表示
関東地方の都道府県については、「〜の県庁所在地は、〜です。」と表示
if文については、elseifは使用せずifとelseのみで処理を記述
1文ずつ改行して縦に表示されるように処理を記述
*/

$capital['北海道'] = '札幌市';
$capital['宮城県'] = '仙台市';

foreach ($capital as $key => $value) {
    if ($key == '北海道' || $key == '宮城県') {
        echo $key.'は関東地方ではありません。'."\n";
    } else {
        echo $key.'の県庁所在地は、'.$value.'です。'."\n";
    }
}

// Q10 関数-1
// 引数に名前を受け取って、「〜さん、こんにちは。」という文字列を返す hello という名前の関数を作成
// hello関数を実行して下記のように文章を2つ表示
/*
hello関数の引数に任意の名前を渡して実行し、その返り値をecho
引数として渡す値を変えて2回実行することで2つの文章を表示
*/

function hello($lastName) {
    $name = $lastName.'さん、こんにちは。'."\n";
    return $name;
}
$name = hello('金谷');
echo $name;

$name = hello('安藤');
echo $name;

// Q11 関数-2
// 以下の条件のもと、消費税込み価格を計算する関数を作成
/*
税抜き価格を引数に受け取って税込価格に変換して返す関数を、calcTaxInPrice という名前で定義する
消費税は 10% として計算する
税抜き価格を変数$priceとして定義し、それを関数に渡して実行する
関数を実行した返り値を、変数$taxInPriceに代入する
最終的に、「1000円の商品の税込価格は1100円です。」と出力
*/

function calcTaxInPrice($price = 1000) {
    $taxInPrice = $price * 1.1;
    return $price.'円の商品の税込み価格は'.$taxInPrice.'円です。';
}
$taxInPrice = calcTaxInPrice();
echo $taxInPrice;

// Q12 関数とif文
// 以下の条件のもと、数字を奇数か偶数か判別する関数を作成
/*
関数名は、distinguishNum という名前で定義する
引数として受け取った数字が奇数なら「〜は奇数です。」という文字列を返り値として返す
引数として受け取った数字が偶数なら「〜は偶数です。」という文字列を返り値として返す
奇数と偶数それぞれを渡して実行し結果を表示
*/

function distinguishNum($num) {
    if ($num % 2 === 1) {
        return $num.'は奇数です。';
    } else {
        return $num.'は偶数です。';
    }
}
$num = distinguishNum(2);
echo $num

// Q13 関数とswitch文
// switch文を使用して、以下の条件のもと、成績の評価を出し分ける関数を作成
/*
関数名は、evaluateGrade という名前で定義する
swtich文を使って引数で受け取った成績(文字列)に応じて処理を分ける
  成績が、A か B なら「合格です。」という文字列を返り値として返す
  成績が、C なら「合格ですが追加課題があります。」という文字列を返り値として返す
  成績が、D なら「不合格です。」という文字列を返り値として返す
  その他の文字列だった場合は、「判定不明です。講師に問い合わせてください。」という文字列を返り値として返す
*/

function evaluateGrade($judge) {
    switch ($judge) {
        case 'A':
        case 'B':
            return '合格です。'."\n";
    
        case 'C':
            return '合格ですが追加課題があります。'."\n";
    
        case 'D':
            return '不合格です。'."\n";
    
        default:
            return '判定不明です。講師に問い合わせてください。'."\n";
    }
}

$judge = evaluateGrade('A');
echo $judge;
$judge = evaluateGrade('E');
echo $judge;

?>