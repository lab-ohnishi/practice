<?php
try {
$pdo = new PDO('mysql:host=localhost; dbname=practice; charset=utf8' ,'testuser','testuser',
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
exit('データベース接続失敗。'.$e->getMessage());
}
?>

<html>
  <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Sample</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     <!-- Optional theme -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
     <!-- Latest compiled and minified JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
     <style type="text/css">
     </style>
  </head>
  <body class="container">
   <div class="container pull-left col-xs-4">
    <h1>データ入力フォーム</h1>
     <form action="sample.php" method="post">
      <div class="form-group">
       <label>name</label>
       <input type="text" id="name" name="name" class="form-control">
      </div>
      <div class="form-group">
       <label for="prefecture">prefecture</label>
      <select id="prefecture" name="prefecture" class="form-control">
        <option>北海道</option>
        <option>青森県</option>
        <option>秋田県</option>
        <option>岩手県</option>
        <option>山形県</option>
        <option>宮城県</option>
        <option>福島県</option>
        <option>群馬県</option>
        <option>栃木県</option>
        <option>茨城県</option>
        <option>千葉県</option>
        <option>東京都</option>
        <option>埼玉県</option>
        <option>神奈川県</option>
        <option>新潟県</option>
        <option>富山県</option>
        <option>石川県</option>
        <option>福井県</option>
        <option>山梨県</option>
        <option>長野県</option>
        <option>岐阜県</option>
        <option>静岡県</option>
        <option>愛知県</option>
        <option>三重県</option>
        <option>滋賀県</option>
        <option>京都府</option>
        <option>大阪府</option>
        <option>兵庫県</option>
        <option>奈良県</option>
        <option>和歌山県</option>
        <option>鳥取県</option>
        <option>島根県</option>
        <option>岡山県</option>
        <option>広島県</option>
        <option>山口県</option>
        <option>徳島県</option>
        <option>香川県</option>
        <option>愛媛県</option>
        <option>高知県</option>
        <option>福岡県</option>
        <option>佐賀県</option>
        <option>長崎県</option>
        <option>熊本県</option>
        <option>大分県</option>
        <option>宮崎県</option>
        <option>鹿児島県</option>
        <option>沖縄県</option>
      </select> 
      <br>
        <button type="submit">送信</button>
      </br>
      </div>
    </form>
  </div>
  <div class="conteiner pull-right col-xs-6">
    <h1>データ一覧</h1>
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>prefecture</th>
          </tr>
        </thead>
      <tbody>
        <?php
          $stmt = $pdo -> prepare("INSERT INTO tourist_spots (id, name, prefecture) VALUES ('',:name, :prefecture)");
          $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
          $stmt->bindValue(':prefecture', $_POST['prefecture'], PDO::PARAM_STR);
          $stmt->execute();
          $stmt = $pdo->query("SELECT * FROM tourist_spots ORDER BY id DESC");
          while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
            print('<tr>');
            print('<td class="id">'.$row['id'].'</td>');
            print('<td class="name">'.$row['name'].'</td>');
            print('<td class="prefecture">'.$row['prefecture'].'</td>');
            print('</tr>');
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
