<html>
  <head>
    <title>PHP POST TEST</title>
  </head>
  <body>

<?php

$link = mysql_connect('localhost', 'testuser', 'testuser');
if (!$link) {
  die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');

$db_selected = mysql_select_db('practice', $link);
if (!$db_selected){
  die('データベース選択失敗です。'.mysql_error());
}

print('<p>データベースpracticeを選択しました。</p>');

mysql_set_charset('utf8');

$result = mysql_query('INSERT INTO  id,name,prefecture FROM tourist_spots');
if (!$result) {
  die('クエリーが失敗しました。'.mysql_error());
}

print('<table>');
print('<thead>');
print('<tr><th>id</th><th>name</th><th>prefecture</th></tr>');
print('</thead>');
print('<tbody>');
while ($row = mysql_fetch_assoc($result)) {
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
print('</tbody>');
print('</table>');

$close_flag = mysql_close($link);

if ($close_flag){
  print('<p>切断に成功しました。</p>');
}
else{
  print('<p>切断に失敗しました。</p>');
}

?>

  </body>
</html>
