<?php
//input.phpからのフォーム受取
$name = $_POST['name'];
$mail = $_POST['mail'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];


// ファイルに書き込み
$time = date('Y-m-d');

$file = fopen('./data/data.txt', 'a');
fwrite($file, $time . '/' . $name . '/' . $mail . '/' . $question1 . '/' . $question2 . '/' . $question3 . "\n");
fclose($file);

//「"\n"」は改行
//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>アンケート回答ありがとうございました！</h1>
    <p>回答したあなたにポイントプレゼント！</p>

    <ul>
        <li><a href="input.php">アンケートに戻る</a></li>
    </ul>
</body>

</html>
