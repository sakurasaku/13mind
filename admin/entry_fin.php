<?php
//入力フォーム
//共通の前処理
require_once('../admin_initialize.inc.php');


if(!isset($_SESSION['login'])){
  header('Location: http://133.242.133.66/maffi/test/index.admin_login.php');
  exit;
}


$data = $_SESSION['post_data'];

//正常処理なので）セッションはもう使わないので消しておく
$_SESSION['post_data'] = array();
unset($_SESSION['post_data']);


//DBに登録する
  //DBに接続する
$dbh = new PDO('mysql:host=localhost;dbname=maffi_d', 'maffi', 'maffi');
  //SQLを用意する
$sql = 'INSERT INTO newsfeed '
     . '(title, begin,'
     . ' end, content)'
     . 'VALUES(:title, NOW(),'
     . ' :end, :content);';
$stmt = $dbh->prepare($sql);
  //値をバインドする
$stmt->bindParam(':title', $data['title']);
//$stmt->bindParam(':begin', $data['begin']);
$stmt->bindParam(':end', $data['end']);
$stmt->bindParam(':content', $data['content']);


  //SQLを実行する
$stmt->execute();

//ヘッダ用変数の設定
$header['user'] = $_SESSION['login'];
$header['pageName'] = '完了';
$header['logout_url'] = ADMIN_LOGOUT_URL;

$smarty->assign('header', $header);

error_reporting(E_ALL ^ E_NOTICE); // Noticeを抑止

//テンプレート表示
$smarty->display('admin/entry_fin.tpl');

//共通の後処理
require_once('../finalize.inc.php');
