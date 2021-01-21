<!DOCTYPE html>
<html lang=ja>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>submit.php</title>
</head>
<header>
  <h1 class="font-weight-normal">PHP</h1>
</header>

<body>
  <main>
    <!-- <h2>Practice</h2>
    <!-- 18. フォームに入力した内容を取得する -->
    <!-- お名前：<?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?> -->
    <!-- formのnameとREQUESTの[]内は揃える -->
    <!-- htmlspecialcharsはセキュリティ面で必ずつける。2つパラメータが必要。1つめはREQUEST、2つ目は
    ENT_QUOTESでほぼ固定 -->

    <!-- 19.チェックボックス、ラジオボタン -->
    <!-- <h2>Practice</h2>
    <!-- 性別：<?php print(htmlspecialchars($_POST['gender'], ENT_QUOTES)); ?> --> -->

    <!-- 20.複数のチェックボックス-->
    <h2>Practice</h2>
    <?php
    foreach ($_POST['reserve'] as $reserve) {
      print(htmlspecialchars($reserve, ENT_QUOTES) . '');
    }
    ?>
    <!-- 複数の選択肢は配列として送信されるためforeachを使って受け取る -->
  </main>
</body>

</html>
