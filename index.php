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
  <?php $tax = 1.1 ?>
  合計金額は:<?php print($sum); ?>円です。
  税込価格は:
  <?php print($sum * $tax); ?>
  円です。
  <!--変数は$から始まる。-->

  <!--6.while文-->
  <?php
  $i = 1;
  while ($i <= 365) {
    print($i . "\n");
    $i++;
  }

  ?>

  <!--while(繰り返す条件){
  繰り返したい処理
  更新処理
  }-->


  <!--7.for文 処理がシンプルな場合に使う-->
  <?php //365までの繰り返し
  for ($i = 1; $i <= 365; $i++) {
    print($i . "\n");
  }
  ?>

  <!--1年後のカレンダーを表示-->
  <?php
  print(date('n/j(D)', time() + 60 * 60 * 24)); //日付（曜日）の表示
  ?>

  <!--time()-->
</body>

</html>
