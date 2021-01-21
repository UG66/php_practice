<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index.php</title>
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
  <!--<?php
      $i = 1;
      while ($i <= 365) {
        print($i . "\n");
        $i++;
      }
      ?>-->

  <!--while(繰り返す条件){
  繰り返したい処理
  更新処理
  }-->


  <!--7.for文 処理がシンプルな場合に使う-->
  <!-- <?php //365までの繰り返し
        for ($i = 1; $i <= 365; $i++) {
          print($i . "\n");
        }
        ?>-->

  <!--8.1年後のカレンダーを表示-->
  <!--<?php
      for ($i = 1; $i <= 365; $i++) {
        $date = strtotime('+' . $i . 'day');
        print(date('n/j(D)', $date));
        print("<br>");
      }
      ?>-->

  <!--time()はタイムスタンプをパラメータに代入できる
  タイムスタンプとはUTC(coordinated universal time)は1970年1月1日0時0分0秒を基準として現在までの秒数を表す。
  改行する場合は\nとあるが、これはブラウザ上の改行コードではないためブラウザ上では改行されない。ブラウザ上で改行する場合は<br>を使う-->

  <!--9.配列、曜日を日本語で表示する-->
  <?php
  $week_name = ['日', '月', '火', '水', '木', '金', '土'];;
  print($week_name[date('w')]);
  ?>

  <!--10.連想配列とforeach文-->
  <?php
  $fruit = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
  ];

  foreach ($fruit as $english => $japanese) {
    print($english . ":" . $japanese . "<br>");
  }
  ?>
  <!--配列の中のものに対して順番がない場合は連想配列を使うと良い。連想配列での繰り返し文の時にはforeach文を使う。-->

  <!--11.if文-->
  <?php

  if (date('G') < 23) {
    print('＊　現在受付時間外です');
  } else {
    print('ようこそ');
  }

  echo ('<br>');

  $x = 'x'; // true / false (変数を文字だけの場合、文字がある→true)
  if ($x) { //if文には条件の省略というのがあるが慣れるまで大変
    //詳しくはphpudemyの22、if文を参照
    print('xには文字が入っています');
  }
  ?>

  <?php echo ('<br>'); ?>

  <!-- 12.ceil floor round -->
  <p>3000円のものから100円値引きした場合は、

    <?php print(floor(100 / 3000 * 100)); ?>
    <!--少数を切り捨て：floor-->
    %引きです。
  </p>


  <p>3000円のものから100円値引きした場合は、

    <?php print(ceil(100 / 3000 * 100)); ?>
    <!--少数を切り上げ：ceil-->
    %引きです。
  </p>

  <p>3000円のものから100円値引きした場合は、

    <?php print(round(100 / 3000 * 100, 1)); ?>
    <!--四捨五入：round-->
    %引きです。
  </p>

  <!-- 13. 書式を整える -->
  <?php
  $date = sprintf('%04d年 %02d月 %02d日', 2021, 1, 19);
  print($date);

  // %04d:0 ⇨ この位置に記された数字や空白で補う　4 ⇨ この位置に記された数字の桁数で表示　d ⇨ 数字で表示する
  // 文字を表示したい場合は s を使う。
  ?>

  <!-- 14. file_put_contents 情報をファイルに保存する-->
  <?php
  $success = file_put_contents("../../news_date/news.html", "2021-01-19 ホームページをリニューアル");

  if ($success) {
    print('ファイルへの書き込みが完了しました');
  } else {
    print('ファイルへの書き込みに失敗しました。フォルダの権限を確認してください。');
  }

  ?>

  <?php echo ('<br>'); ?>

  <!-- 15. file_get_contents ファイルを読み込む -->
  <?php
  $news = file_get_contents("../../news_date/news.html");
  $news .= "2021-1-13 ニュースを追加しました。"; //.= 文字列連結
  file_put_contents("../../news_date/news.html", $news);
  print($news);

  // readfile("../../news_date/news.html")
  // readfileはあくまでも読み込み専用。書き換えなどはできない。
  ?>

  <!-- 16. simplexml_load_file XMLファイルを読み込む -->
  <!-- <?php
        $xmlTree = simplexml_load_file("https://h2o-space.com/feed/");
        foreach ($xmlTree->channel->item as $item) :
        ?>
    ・<a href="<?php print($item->link); ?>"> <?php print($item->title); ?> </a>
  <?php
        endforeach;
  ?> -->

  <!-- 17. jsonを読み込む -->
  <!-- JSON JavaScript Object Notation -->
  <!-- <?php
        //       $file = file_get_contents("https://h20-space.com/feed/json/");
        //       $json = json_decode($file);

        //       foreach ($json->$items as $item) :
        //
        ?>
  //   ・<a href="<?php print($item->url); ?>"><?php print($item->title); ?> </a>
  // <?php
      //       endforeach;
      ?> -->
  <br>
  <!-- 21.半角数字に直す -->
  <?php

  $age = 20;

  $age = mb_convert_kana($age, 'n', 'UTF-8'); //nは数字を半角に直す

  if (is_numeric($age)) {
    print($age . '歳');
  } else {
    print('＊　年齢が数字ではありません');
  }
  ?>

  <br>
  <!-- 22.正規表現 -->
  <?php
  $zip = '83749387';

  $zip = mb_convert_kana($zip, 'a', 'UTF-8'); //aは英数字を半角に直す
  if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
    print('郵便番号：〒' . $zip);
  } else {
    print('* 郵便番号ではありません');
  }

  ?>

  <br>


</body>

</html>

<!-- 23.ページジャンプ -->
<!-- <?php
      header('Location: https://h2o-space.com');
      exit();
      ?> -->
