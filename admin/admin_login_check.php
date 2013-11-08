<?php
//入力フォーム
//共通の前処理
require_once('../initialize.inc.php');

//DBに接続してログインしていいか確かめる
  //DBに接続する
$dbh = new PDO('mysql:host=localhost;dbname=maffi_d', 'maffi', 'maffi');

$name = $_POST['user'];
$pass = $_POST['pass'];

$h = $pass;
for($i = 0; $i < 1000; $i++){
  $h = hash('sha1', $pass.$h);
}

$sql = 'SELECT id FROM admin_login'
      .' WHERE user = :user AND pass = :pass;';

//$stmt = $dbh->query($sql);
$stmt = $dbh->prepare($sql);

$stmt->bindParam(':user', $name);
$stmt->bindParam(':pass', $h);

//var_dump($stmt);

$stmt->execute();

//データがあれば正常
if($stmt->fetch()){
  $_SESSION['login'] = $name;
  header('Location: http://133.242.133.66/maffi/test/admin/index.php');
  exit;
}else{
  header('Location: http://133.242.133.66/maffi/test/admin/index.admin_login.php');
  exit;
}

//共通の後処理
require_once('../finalize.inc.php');

