<html>
<head>
    <title>News Application</title>
</head>
<body>

<p>NewsPost</p>
<p>24卒ちゃんねる♡</p>

<p>タイトル</p>
<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
<input type="text" name="personal_name"><br><br>
<p>投稿内容</p>
<textarea name="contents" rows="8" cols="40">
</textarea><br><br>
<input type="submit" name="btn1" value="投稿する">
</form>

<?php
$personal_name = $_POST['personal_name'];
$contents = $_POST['contents'];
$contents = nl2br($contents);

print('<p>タイトル:'.$personal_name.'</p>');
print('<p>投稿内容:</p>');
print('<p>'.$contents.'</p>');

$filename = 'toukou.txt';

// ファイル読み込み
echo file_get_contents($filename);





// ファイルに追記する内容
$data = "かきくけこ\n";

// ファイルに書き込む（FILE_APPENDフラグはファイルの最後に追記する）
file_put_contents($filename, $data, FILE_APPEND);







$file = 'toukou.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
$content = "入力内容";
 
$fp = fopen($filename,'w');
 
fwrite($fp,$content);
 
fclose($fp);

?>

</body>
</html>
