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
$i = 0;
while($i<3){
        echo "PHP" . "<br>";
        $i++;
}
?>

<?php
echo "<hr>";
?>


<!-- switch文 -->

<!-- breakを書かないと処理が続けられる -->
<?php
switch($i){
        case 1:
                echo "1です";
                break;
        case 2:
                echo "2です";
                break;
        default:
        echo "1でも2でもないです";

}
?>

<br>

<!-- 空のケース -->


<?php
$i=1;
switch($i){
        case 0;
        case 1:
                echo "0か1です";
                break;
        case 2:
                echo "2です";
                break;
        case 3:
                break;
        // defaultを書かないと、どれにも当てはまらないときは何もしない


}       ?>

<!-- do while文 -->
<?php
$i = 0;
do{
        echo $i . "<br>";
        $i++;
}while($i<3);
?>

<?php
$i = 100;
do{
        echo "買います". "<br>";
        $j = $j - 50;
        echo "残金は" . $j . "円です" . "<br>";
}while($i>=150);
?>

<!-- check test -->

q1

次の処理
<br>

Q2
case以外の処理
<br>

q3
for

<?php

for($i=10;$i>0;$i--){
        echo $i . "<br>";
}
?>

<?php
echo "<hr>";
?>

while

<?php

$i = 10;

while($i>0){
        echo $i . "<br>";
        $i--;
}

?>

<br>

q4

<?php

$i = 2;
while ($i<2){
        echo "whileループの例題です" . "<br>";
        $i++;
}
echo "whileループを抜けました";
?>

<br>

q5



<?php
$total = 10;
if($total==10){
        echo"10です";
}else if($total==20){
        echo "20です";
}else{
        echo"その他";
}
?>

<?php
$total = 10;
switch($total){
        case 10:
                echo "10です";
                break;
        case 20:
                echo "20です";
                break;
        default:
                echo "その他";
}
;?>


<?php
echo "<hr>";
?>

<?php
$friends = array("はるき","かおる","ひでと");
var_dump($friends);
?>

<br>

<?php
$friends = ["はるき","かおる","ひでと"];
var_dump($friends);


echo "0番目の要素は" . $friends[0] . "です" . "<br>";
echo "1番目の要素は" . $friends[1] . "です" . "<br>";
echo "2番目の要素は" . $friends[2] . "です" . "<br>";

?>

<!-- 値の追加 -->

<?php
$friends = ["はるき","かおる","ひでと"];
$friends[] = "まさとし";
var_dump($friends);
?>

<br>

<?php
$friends = ["はるき","かおる","ひでと"];
$friends[1] = "まさとし";
$friends[5] = "まさ";
var_dump($friends);
?>

<br>

<!-- 多次元配列 -->

<?php
$class1=array("はるき","かおる","ひでと");
$class2=array("まさとし","たかし","まさ");

$classes = array($class1,$class2);

var_dump($classes);

echo $classes[0][1] . "<br>";
?>
<?php
echo "<hr>";
?>
<!-- checktest -->
Q1
多次元配列
<?php
echo "<hr>";
?>
Q2

<?php
$class1=["レモン","バナナ","イチゴ"];
$class2=["りんご","みかん"];
$fruit = [$class1,$class2];


echo $fruit[0][2];
?>


<?php
echo "<hr>";
?>
<!-- 連想配列 -->


<?php
$result1 = array("math"=>90,"english"=>80,"Japanese"=>70);

var_dump($result1);

$result2 = ["history"=>80,"science"=>70];

var_dump($result2);

?>

<br>
<?php
echo "<hr>";
?>

<?php
$result1 = array("math"=>90,"english"=>80,"Japanese"=>70);

var_dump($result1);


$result1["math"] = 45;
var_dump($result1);


$result1["music"] = 100;
var_dump($result1);
?>

<?php

$result1 = ["math"=>90,"english"=>80,"Japanese"=>70];

$friends = ["Haruki"=>$result1];


var_dump($friends);

$friends["Kaoru"] = ["math"=>90,"english"=>80,"Japanese"=>70];
var_dump($friends);

?>

<?php
echo "<hr>";
?>


<!-- check Test -->

q1 =>

<br>

q2

<?php

$result1 = ["math"=>90,"english"=>80,"Japanese"=>70];

echo $result1["english"];

?>

<?php
echo "<hr>";
?>

5/8

<?php
$friends = ["はるき","かおる","ひでと"];
for($i=0;$i<3;$i++){
        echo $friends[$i] . "<br>";
}       ?>


 foreachと連想配列


 <br>

 <!-- foreach(配列 as $変数名) -->


<?php
$result = ["math"=>90,"english"=>80,"Japanese"=>70];
foreach($result1 as $score ){
        echo $score."<br>";
}
?>

foreach構文で連想配列のキーと値を出力
<br>

<?php
$results = ["math"=>90,"english"=>80,"Japanese"=>70];
foreach($results as $title => $score){
        echo $title . ":" . $score . "<br>";
}
?>

<br>

foreach構文で通常配列のキーと値を出力
<br>
<?php

$numbers = [2,4,6];
foreach($numbers as $key=>$value){
        $numbers[$key] = $value *10;
}
var_dump($numbers);
?>

<br>

<?php
echo "<hr>";
?>

Q1
<br>

$lists=["野菜"=>["きゅうり","かぼちゃ","ジャガイモ"],"果物"=>["いちご","りんご","バナナ"]];

<br>
Q2
<br>
A:as B:=>
<br>
Q3
<br>
<?php

$lists=["野菜"=>["きゅうり","かぼちゃ","ジャガイモ"],"果物"=>["いちご","りんご","バナナ"]];

foreach($lists as $key=>$values){
        echo $key . ":<br>";
        foreach($values as $value) {
                echo "  - " . $value . "<br>";
        }
}
?>

<?php
echo "<hr>";
?>


<?php
echo "<hr>";
?>

関数

<br>


引数のない関数
<br>


$now_time=$time();

<br>

返り値を使わない関数

$fruits=["りんご","みかん","バナナ"];
sort($fruits);//アルファベット順にソートされる


<?php
echo "<hr>";
?>

Q1:返り値
<br>
Q2:　引数:morning 結果:7
//mb_strlen関数は文字数を返す

<?php
echo "<hr>";
?>


function get_price($price){<br>
        $price=$price*1.1;<br>
        return round($price);<br>
//roundは小数点以下を四捨五入する関数
}<br>
        echo get_price(300)     ;<br>
//330が出力される

<br>


<?php
function default_demo($name="太郎"){
        echo "名前は" . $name . "です";

}
default_demo();
default_demo("花子");
?>
<br>
<br>
<br>
<?php
function vending_machine($price,$juice_name){
        if($price>=120){
                echo $juice_name . "のお買い上げありがとうございます<br>";
}else{
        return $juice_name."の購入金額が不足しています<br>";

}
}
echo vending_machine(120,"オレンジジュース");
$price=90;
$juice_name="アップルジュース";
echo vending_machine($price,$juice_name);
?>