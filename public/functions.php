<?php
function vending_machine($price,$juice_name){
        if($price>=120){
                echo $juice_name . "のお買い上げありがとうございます<br>";
}else{
        return $juice_name."の購入金額が不足しています<br>";

}
}