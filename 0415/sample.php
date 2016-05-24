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
    <title>PHP GET TEST</title>
  </head>
  <body class="container">
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
     $stmt = $pdo->query("SELECT * FROM tourist_spots");
	 	 while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
      print('<tr>');
	      print('<td class="id">'.$row['id'].'</td>');
        print('<td class="name">'.$row['name'].'</td>');
        print('<td class="prefecture">'.$row['prefecture'].'</td>');						        print('</tr>');
  	 }
	   ?>
      </tbody>
    </table>
  </div>
</body>
</html>
