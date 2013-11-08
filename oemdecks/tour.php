<?php
  
//初期処理
require_once('../initialize.inc.php');

//入力チェック
if ( $_GET['t'] ) {
	// 値があって、しかも数値型の場合は
	if ( is_numeric( $_GET['t'] ) ){
		// idに入力値を設定する
		$tour = $_GET['t'];
	}
}

  //DBに接続する
$dbh = new PDO('mysql:host=localhost;dbname=maffi_d', 'maffi', 'maffi');

//SQLを用意する
$sql = 'SELECT * FROM tour WHERE id = :page;';

//  $stmt = $dbh->query($sql);
$stmt = $dbh->prepare($sql);

  //値をバインドする

$stmt->bindParam(':page', $tour, PDO::PARAM_INT);

$stmt->execute();

//結果をためておく配列
$guide = array();

//結果を取得する
$guide = $stmt->fetch();


$smarty->assign('tour', $tour);
$smarty->assign('guide', $guide);

//  error_reporting(E_ALL ^ E_NOTICE); // Noticeを抑止 ビット演算子 (エックスオア)

  //テンプレートから出力
  $smarty->display('oemdecks/tour.tpl');


//後処理
require_once('../finalize.inc.php');

