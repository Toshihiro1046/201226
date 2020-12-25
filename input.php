<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
<h1>あなたが一番使うフードデリバリーサービスはどれ？</h1>
    <form action="write.php" method="post">
      <p>  お名前: <br>
          <input type="text" name="name"  class="q1" size="20" placeholder="氏名">
      </p>
      <p> EMAIL: <br>
          <input type="text" name="mail"  class="q1" size="20" placeholder="xxx@xxx">
      </p>
      <p> どのフードデリバリーを利用しますか: <br>
          <input type="radio" name="question1" class="q" size="20" value="Uber Eats"> Uber Eats
          <input type="radio" name="question1" class="q" size="20" value="出前館"> 出前館
          <input type="radio" name="question1" class="q" size="20" value="デリバリー"> dデリバリー
          <input type="radio" name="question1" class="q" size="20" value="LINEデリマ"> LINEデリマ <br>
          <input type="radio" name="question1" class="q" size="20" value="Rakutenデリバリー"> Rakutenデリバリー
          <input type="radio" name="question1" class="q" size="20" value="Wolt"> Wolt
          <input type="radio" name="question1" class="q" size="20" value="DiDi Foods"> DiDi Foods
          <input type="radio" name="question1" class="q" size="20" value="anyCarry"> anyCarry <br>
          <input type="radio" name="question1" class="q" size="20" value="fineDine"> fineDine
          <input type="radio" name="question1" class="q" size="20" value="foodPanda"> foodPanda
          <input type="radio" name="question1" class="q" size="20" value="フードネコ"> フードネコ
      </p>
      <p> 選んだフードデリバリーの良いところを教えて下さい: <br>
          <textarea name="question2" class="q2" size="20" rows="5" clos="30">回答をお願い致します
          </textarea>
      </p>
      <p> 選んだフードデリバリーの悪いところを教えて下さい: <br>
          <textarea name="question3" class="q2" size="20" rows="5" clos="30">回答をお願い致します
          </textarea>
      </p>

      <input type="submit" value="送信">
    </form>
</body>
<style>
.q1 {
    width: 30%;
}
.q2 {
    width: 60%
}
</style>

</html>
