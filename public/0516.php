調べたい文字列である引数1のみを指定したもの
<?php
mb_strlen("morning");
?>

<br>

引数1とその文字コードを指定したもの
<?php
mb_strlen("morning", "UTF-8");
?>

<br>

(string $str)
<?php
echo strtoupper("morning");
?>
<br>

引数が不要のパターン「void」
time関数は現在時刻を取得する関数なので、引数が不要です。

echo time();

<br>

<?php
echo "<hr>";
?>

Q1
date("Y-m-d");

時間分秒
date("H:i:s");

<br>

Q2
<?php
$yesterday = mktime(0, 0, 0, 5, 15, 2024);
echo date("Y-m-d", $yesterday);