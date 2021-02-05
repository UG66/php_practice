<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>
<?php
// 01.phpとデータベースの接続
try {
  $db = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
  echo 'DB接続エラー:' . $e->getMessage();
}
// PDO = PHP Date Object - phpでdatabaseを扱うためのオブジェクト -
// パラメーターが3つある。
// 1：接続文字列　mysql；サーバーのアドレス；文字コード
// 2：ユーザー名
// 3：パスワード
// これら3つを記述することでデータベースに接続できる

// 02.phpからデータベースに対してsqlを発行

$count = $db->exec('INSERT INTO my_items Set item_name="もも",price=210,keyword="缶詰、ピンク、甘い"');

echo $count . '件のデータを挿入しました';
?>




</pre>
  </main>

</body>

</html>
