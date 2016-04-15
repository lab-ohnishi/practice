<?php
try {
  $pdo = new PDO('mysql:host=localhost; dbname=practice; charset=utf8' ,'testuser','testuser',
    array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
  exit('データベース接続失敗。'.$e->getMessage());
}

$name = $_POST['name'];
$prefecture = $_POST['prefecture'];
$stmt = $pdo -> prepare("INSERT INTO tourist_spots (name, prefecture) VALUES (:name, :prefecture)");
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':prefecture', $prefecture, PDO::PARAM_STR);
$stmt->execute();

?>

<html>
  <head>
    <title>PHP GET TEST</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </head>
  <body class="container">
<div class="col-xs-6">
<h1>データ入力フォーム</h1>
<form action="show.php" method="post">
<div class="form-group">
  <label>name</label>
  <input type="text" name="name" class="form-control">
</div>
<div class=" form-group">
  <label>prefecture</label>
  <select type="text" name="prefecture" class="form-control">
<option value="" selected>都道府県</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
  </select>
</div>
<div class="form-group">
  <input type="submit" value="送信">
</div>
</form>
</div>

<div class="col-xs-6">
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
$stmt = $pdo->query("SELECT * FROM tourist_spots ORDER BY id DESC");
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
  print('<tr>');
  print('<td class="id">');
  print($row['id']);
  print('</td><td class="name">');
  print($row['name']);
  print('</td><td class="prefecture">');
  print($row['prefecture']);
  print('</td>');
  print('</tr>');
}
?>
</tbody>
</table>

</div>


  </body>
</html>
