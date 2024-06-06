<?php
$msg=null;
if(isset($_POST['upload'])){
    $file=$_FILES['upfile'];
    if($file['error']===UPLOAD_ERR_OK){
        $ext=pathinfo($file['name'], PATHINFO_EXTENSION);
        if($ext==='jpg' || $ext==='png' || $ext==='gif'){
            $path='upload/'.$file['name'];
            $res=move_uploaded_file($file['tmp_name'], $path);
            if($res){
                $msg='アップロードしました';
            }else{
                $msg='アップロード失敗しました';
            }
        }else{
            $msg='拡張子がjpg,png,gifのいずれかのファイルをアップロードしてください';
        }
    }else{
        $msg='ファイルを選択してください';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>画像アップロード</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="container">
        <h1>画像アップロード</h1>
        <?php if($msg): ?>
            <p><?php echo $msg; ?></p>
        <?php endif; ?>
        <form action="upload2.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>アップロードファイル</label>
                <input type="file" id="file1" name="upfile" class="form-control-file">
            </div>
            <input type="submit" value="アップロード" name="upload" class="btn btn-primary">
        </form>
    </div>
</html>