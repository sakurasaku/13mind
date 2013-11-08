<?php
  
//初期処理
require_once('../initialize.inc.php');

//入力チェック
$nob = $_GET['nameOfBrand'];
if (!preg_match("/^([a-zA-Z0-9]){2,15}$/", $nob)){
    header('Location: http://133.242.133.66/maffi/test/products/index.php');
}

  //DBに接続する
$dbh = new PDO('mysql:host=localhost;dbname=maffi_d', 'maffi', 'maffi');

//SQLを用意する
$sql = "SELECT * FROM products WHERE brand = :brand ORDER BY up_date DESC LIMIT 50;";

//  $stmt = $dbh->query($sql);
$stmt = $dbh->prepare($sql);

  //値をバインドする

$stmt->bindParam(':brand', $nob);
//$stmt->bindParam(':page_top', $page_top, PDO::PARAM_INT);
//$stmt->bindParam(':page_count', $line_max, PDO::PARAM_INT);

$stmt->execute();

//結果をためておく配列
$picPath = array();

//結果がなくなるまでは１行づつ取得する
while($row = $stmt->fetch()){
//var_dump($row);
  $picPath[] = $row;
}


$smarty->assign('picPath', $picPath);
$smarty->assign('nameOfBrand', $nob);

//  error_reporting(E_ALL ^ E_NOTICE); // Noticeを抑止 ビット演算子 (エックスオア)

  //テンプレートから出力
  $smarty->display('products/detail.tpl');


//後処理
require_once('../finalize.inc.php');

