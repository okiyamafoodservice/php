<?php
//1行のコメントアウト
# 1行のコメントアウト

/*複数行の
コメントアウト*/

echo "Hello World";

?>

<br>

You have
<?php echo 2 + 3; ?>

cats.


Q1
//開始タグ　<?php

        //終了タグ
        ?>

Q2
//1行のコメントアウト
# 1行のコメントアウト

/*複数行の
コメントアウト*/


Q3 文字列になるため

<br>


<?php

echo PHP_INT_MAX
?>

<?php var_dump("本日は") ?>

<br>

<?php

$clientname = 'Hanako Yamada';

echo "ようこそ" . $clientname . "様"; ?>

<?php

//文字列を使うときは.を使う
?>

<?php

echo "<hr>";
$a = "a";
$b = "b";
echo ($a . $b);
echo "<hr>";

?>

<?php

$a = 8;
$b = 3;

echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";

?>

<?php

echo 2+3*100 . "<br>";

echo (2+3)*100 . "<br>";

echo "<hr>";
?>

<?php
$true = true;
$false = false;

$a=$true&&$true;
$b=$true&&$false;
$c=$true&&$true&&$true;
$d=$true&&$true&&$false;
$e = $true && ($true && $false);

var_dump($a,$b,$c,$d,$e);

echo "<hr>";
?>

<?php
$true = true;
$false = false;

$a=$true||$true;
$b=$true||$false;
$c=$true||$true||$true;
$d=$true||$true||$false;
$e = $true || ($true || $false);
$f = $false || $false;

var_dump($a,$b,$c,$d,$e,$f);

echo "<hr>";
?>



<?php
$true = true;
$false = false;

$a=!$true;
$b=!$false;
$c=!$true&&!$true;
$d=!($true&&$true);


var_dump($a,$b,$c,$d);
echo "<hr>";
?>

<?php

$a=$true&&$true;
$b=$true&&$false;
$c=$true||$true;
$d=$true||$false;
$e = !$true;
$f = !$false;
$g=!($true&&$true);
$h=!(true&&$false)&&$true;

var_dump($a,$b,$c,$d,$e,$f,$g,$h);
echo "<hr>";
?>


<?php
// 日付を出す関数
// echo time();

$blog = mktime(15, 40, 0, 4, 18, 2024);

//timeが現在時刻、time()-86400が一日前の時刻
if($blog>=time()-86400){
        echo "New!";
}else{
        echo "Old!";
}

echo "<hr>";
?>

<?php

$age = 19;

if ($age < 20) {
        echo "購入できません";
}
else if($age >= 20 ){
        echo "年齢を確認する";
}

else{
        echo "購入できます";
}

echo "<hr>";

if ($age < 20) {
        echo "20歳未満です";
}
else if($age >= 20 ){
        echo "20歳以上です";
}

else{
        echo "購入できます";
}

echo "<hr>";
?>

<?php

// for:繰り返し処理


// for(式1;式2;式3){
//         処理内容
// }

//式1:初期化
//式2:条件式
//式3:更新処理

for($i=0;$i<10;$i++){
        echo $i . "<br>";
}

?>

<?php

for($i=0;$i<=31;$i++){
        echo $i . "";
        if($i%7==0){
                echo "<br>";
        }
}
echo "<hr>";
?>
<!-- WHILE -->

<!--
// while(条件式){
//         処理内容
// } -->


<?php

$i = 1;
while($i<=10){
        echo $i . "<br>";   //$iの値を出力
        $i++; //出力後にiの値に1を足す
}
?>

<?php

$j=1000;

while($j>=150){
        echo "買います" . "<br>";
        $j = $j - 150;
        echo "残金は" . $j . "円です" . "<br>";
}

?>
<!-- 94P -->

Q1
<?php
$i = 0;
while($i<3){
        echo "PHP" . "<br>";
        $i++;
}
?>

Q2

無限に出力される

< ?php
$i = 0;
while(1){
        echo "PHP" . "<br>";
        $i++;
}
?>

<?php
echo "<hr>";
?>

<!-- switch文 -->

<?php

$i = 1;

switch($i){
        case 1:
                echo "1です";
                break;
        case 2:
                echo "2です";
                break;
        default:
}
;?>