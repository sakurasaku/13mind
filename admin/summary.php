<?php
//入力フォーム
//共通の前処理
require_once('../admin_initialize.inc.php');

if(!isset($_SESSION['login'])){
  header('Location: http://133.242.133.66/maffi/test/index.admin_login.php');
  exit;
}


//ページの初期値（DEFAULTを値）指定する
$page = 1;
//ページの表示数を指定する
$line_max = 10;

//ページ数が設定されていれば取得する
if(isset($_GET['p'])){
  $page = $_GET['p'];
}
//最初に表示されるidを取得
$page_top = $line_max * ($page - 1);

  //DBに接続する
$dbh = new PDO('mysql:host=localhost;dbname=maffi_d', 'maffi', 'maffi');

//全件数を取得するSQLを用意する
$sql = 'SELECT COUNT(*) FROM products;';
//  $stmt = $dbh->query($sql);
  $stmt = $dbh->prepare($sql);

  $stmt->execute();

  //データを取得する
  $row = $stmt->fetch();

  //データの中の件数を取得する
  $count_max = $row[0];

  //最大ページ数を取得する
  $page_max = (int)($count_max / $line_max);
  if($count_max % $line_max != 0){
    $page_max++;
  }

  //ページ数をチェックする
  if(!is_numeric($page)){
  $page = 1;
  }else{
    if($page < 1 || $page_max < $page){
      $page = 1;
    }
  }



//SQLを用意する
$sql = "SELECT * FROM products LIMIT :page_top, :page_count;";

//  $stmt = $dbh->query($sql);
$stmt = $dbh->prepare($sql);

  //値をバインドする

$stmt->bindParam(':page_top', $page_top, PDO::PARAM_INT);
$stmt->bindParam(':page_count', $line_max, PDO::PARAM_INT);

$stmt->execute();

//結果をためておく配列
$list_data = array();

//結果がなくなるまでは１行づつ取得する
while($row = $stmt->fetch()){
//var_dump($row);
  $list_data[] = $row;
}


//ページャー用のデータを作る
$pager = array();
$pager['prev'] = $page - 1;
$pager['next']= $page + 1;
$pager['current']= $page;
$pager['max'] = $page_max;



//ヘッダ用変数の設定
$header['user'] = $_SESSION['login'];
$header['pageName'] = '一覧';
$header['logout_url'] = ADMIN_LOGOUT_URL;

$smarty->assign('header', $header);
$smarty->assign('pager', $pager);
$smarty->assign('list_data', $list_data);



//テンプレート表示
$smarty->display('admin/summary.tpl');

//共通の後処理
require_once('../finalize.inc.php');