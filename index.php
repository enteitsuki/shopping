<?php
$charges = [1000, 3000, 5000];

echo "Suicaにチャージします。金額に該当する番号を入力してください。\n";
for ($i = 0; $i < count($charges); $i++) {
    $num = $i + 1;
    echo $num . ': ' . number_format($charges[$i]) . "円\n";
}
echo '番号: ';

$answer = trim(fgets(STDIN));

if (empty($answer) || $answer > count($charges)) {
    echo "無効な番号です。処理を終了します。\n";
    exit;
}

$money = $charges[$answer - 1];
echo $money . "チャージしました。\n";

while ($money > 0) {
    echo '商品の価格を入力して下さい:';
    $price = trim(fgets(STDIN));
    $money -= $price;
    if ($money > 0) {
        echo '残高は' . $money . "です。\n";
    } else {
        echo "チャージ金額を上回るため購入できません。\n買い物を終了します。\n";
    }
}