<?php
// ファイルを開く
$openfile = fopen('./data/data.txt', 'r');
// ファイル内容を1行ずつ読み込んで出力

while($line = fgets($openfile)){
        //list($time, $name, $mail, $question1, $question2, $question3) = explode("/", $line);
        //テーブルを使って表形式にしたかったが、上手くいかずテキスト形式となってしまった。
        echo nl2br($line);
//[while]は一行ずつ読み取ってた文章を表示、最後なくなったら自動で読み取り終了
//[nl2br]は「"\n"」を「<br>」に変換するもの
// ファイルを閉じる

}
fclose($openfile);
?>
</table>


</body>
</html>
