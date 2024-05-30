<?php $info = file_get_contents("info.txt");
//ファイルからテキストデータを取ってくる
?>

<?php

$fp = fopen("info.txt","r");

$title = fgets($fp);
?>
<!doctype html>
<html lang="ja" >
  <head>
    <title>サークルサイト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>

    <?php include('navbar.php'); ?>

    <main role="main" class="container" style="padding:60px 15px 0">
      <div>
        <!-- ここから「本文」-->

        <h1>お知らせ</h1>
      <!-- <?php echo nl2br ($info, false); ?> -->

<?php
if ($fp){

$title = fgets($fp);

if($title){
    echo '<p><a href="info.php">' .$title. '</a></p>';
}else{
    echo '<p>お知らせはありません。</p>';

}
fclose($fp);
}else{
    echo '<p>お知らせはありません。</p>';
}
?>

        <!-- 本文ここまで -->
      </div>
    </main>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>