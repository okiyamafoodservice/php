<?php
include ('check2_data.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newFruit = $_POST['newFruit'];
    if (!empty($newFruit)) {
        $fruits[] = $newFruit;
    }
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>フォーム</title>
</head>
<body>
<h1>フォーム</h1>
<form action="check2form.php" method="post">
    <!-- ここにフォームを書いていく -->
<?php
echo '<select name="fruit">';
foreach ($fruits as $key => $val) {
    echo '<option value="' . htmlspecialchars($key) . '">' . htmlspecialchars($val) . '</option>';
}
echo '</select>';
?>



    <p>すきな果物を選んでください。:
    </p>
    <input type="submit" value="送信">
</form>

<form action="" method="post">
    <p>新しい果物を追加:</p>
    <input type="text" name="newFruit">
    <input type="submit" value="追加">
</form>
</body>
</html>
