<?php
//入力フォーム
//共通の前処理
require_once('../admin_initialize.inc.php');


if(!isset($_SESSION['login'])){
  header('Location: http://133.242.133.66/maffi/test/admin/index.admin_login.php');
  exit;
}


//セッションの値を表示する（DEBUG用）
//var_dump($_SESSION);

//もしセッションの値があったら
if(isset($_SESSION['post_data'])){
  $data = $_SESSION['post_data'];
}else{
  //なかったら空にしておく
  $data = array();
}

//var_dump($_SESSION['input_error']);
//もしエラーの値があったら
if(isset($_SESSION['input_error'])){
  $errors = $_SESSION['input_error'];
}else{
  //なかったら空にしておく
  $errors = array();
}

//セッションの値をsmartyに割り当てておく
$smarty->assign('data', $data);
$smarty->assign('errors', $errors);

//セッションは使い終わったら消しておく
$_SESSION['post_data'] = array();
unset($_SESSION['post_data']);
//セッションは使い終わったら消しておく
$_SESSION['input_error'] = array();
unset($_SESSION['input_error']);


//ヘッダ用変数の設定
$header['user'] = $_SESSION['login'];
$header['pageName'] = '新規登録';
$header['logout_url'] = ADMIN_LOGOUT_URL;

$smarty->assign('header', $header);

//テンプレート表示
$smarty->display('admin/entry_input.tpl');

//共通の後処理
require_once('../finalize.inc.php');
