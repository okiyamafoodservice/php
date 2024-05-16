調べたい文字列である引数1のみを指定したもの
<?php
mb_strlen("morning");
?>

引数1とその文字コードを指定したもの
<?php
mb_strlen("morning", "UTF-8");
?>

(string $str)
<?php
echo strtoupper("morning");
?>

引数が不要のパターン「void」
time関数は現在時刻を取得する関数なので、引数が不要です。

echo time();


<?php
echo "<hr>";
?>

Q1
date("Y-m-d");

Q2
mktime(0, 0, 0, 5, 15, 2024);