<?php
$charges = [1000, 3000, 5000];

echo "Suicaにチャージします。金額に該当する番号を入力してください。\n";
foreach ($charges as $charge) {
    $num += 1;
    echo $num . ': ' . number_format($charges[$num - 1]) . "円\n";
}
echo '番号: ';

$answer = trim(fgets(STDIN));
$money = $charges[(int)$answer - 1];
switch ($answer) {
    case 1:
    case 2:
    case 3:
        echo $money . "円チャージしました。\n";
        break;
    default:
        echo "無効な番号です。処理を終了します。\n";
        exit;
}

$flag = true;
while ($flag) {
    echo '商品の価格を入力して下さい:';
    $price = trim(fgets(STDIN));
    if ($money >= $price) {
        $money -= $price;
    } else {
        $flag = false;
    }
    echo '残高は' . $money . "です。\n";
}
echo "チャージ金額を上回るため購入できません。\n買い物を終了します。\n";