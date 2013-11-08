<?php
//初期処理
require_once('../initialize.inc.php');

//入力チェック
$name = $_GET['name'];
if (!preg_match("/^([a-zA-Z]){2,15}$/", $name)){
    header('Location: http://133.242.133.66/maffi/test/rider/index.php');
}

  //DBに接続する
$dbh = new PDO('mysql:host=localhost;dbname=maffi_d', 'maffi', 'maffi');

//SQLを用意する
$sql = 'SELECT * FROM riders WHERE name = :name;';

$stmt = $dbh->prepare($sql);

  //値をバインドする
$stmt->bindParam(':name', $name);

$stmt->execute();

//結果をためておく配列
$data = array();

//結果を取得する
$data = $stmt->fetch();
//var_dump($data);

//画像の数を取得して配列代入
$path = array();
$number = $data['count'];
for($i = 1; $i <= $number; $i++){
  $path[$i -1] = $i;
}

$smarty->assign('data', $data);
$smarty->assign('path', $path);

//  error_reporting(E_ALL ^ E_NOTICE); // Noticeを抑止 ビット演算子 (エックスオア)

  //テンプレートから出力
  $smarty->display('rider/status.tpl');


//後処理
require_once('../finalize.inc.php');

