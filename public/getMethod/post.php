<?php
$name=$_POST['name'];

$gender = $_POST['gender'];
if($gender =="man"){
    $gender="男性";
}else if($gender=="woman"){
    $gender="女性";
}

$tmp_star=$_POST['star'];
for($i=0; $i<count($tmp_star); $i++){
    $star.="★";
}

for(;$i<5;$i++){
    $star.="☆";
}

$other=$_POST['other'];
