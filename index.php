<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>PHP練習</h1>
  <!--1.画面に文章を表示-->
  <?php
  print("こんにちは");
  print("I'm studying \"PHP\"");
  ?>
  <!--printは関数で、値をブラウザに表示する機能を持つ。-->

  <!--2.画面に数式を表示-->
  <?php
  print('1 + 1');
  ?>

  <!--3.現在時刻の表示-->
  <?php
  date_default_timezone_set('Asia/Tokyo');
  print("現在は" . date('G時 i分 s秒') . "です。");
  ?>
  <!--dateは関数-->

  <!--4.オブジェクトを使った現在時刻の表示-->
  <?php
  $today = new DateTime();
  print($today->format('G時 i分 s秒'));
  ?>
  <!--Datetimeオフジェクトのインスタンス$todayのメソッドformatを使っている。
  オブジェクトにはさまざまなメソッドが入っている。-->

  <!--5.変数-->
  <?php $sum = 100 + 100 + 100  + 500 ?>
  合計金額は:<?php print($sum); ?>円です。た
  税込価格は:
  <?php print($sum * 1.1); ?>
  円です。
  <!--変数は$から始まる。-->
</body>

</html>
