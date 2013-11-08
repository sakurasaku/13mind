<?php
//入力フォーム
//共通の前処理
require_once('../admin_initialize.inc.php');


if(!isset($_SESSION['login'])){
  header('Location: http://133.242.133.66/maffi/test/admin/index.admin_login.php');
  exit;
}


//入力された値を表示（デバッグ用）
//var_dump($_POST);

//セッションに保存しておく
$_SESSION['post_data'] = $_POST;
//var_dump($_POST['title']);

//エラー有無のチェックを無しにしておく
$is_error = false;
//エラー用の配列を初期化する
$errors = array();

//タイトルが無かったらエラー
if($_POST['title'] == ''){
  $is_error = true;
  $errors['title'][] = 'タイトルを入力してください';
}else{
  //タイトルの文字数が2文字以上10文字以下じゃなければ
  $length = mb_strlen( $_POST['title']);
  if($length < 2 | $length > 10 ){
    $is_error = true;
    $errors['title'][] = '2文字以上10文字以下で入力してください';
  }
}
//開始日時が無かったらエラー
if($_POST['begin'] == ''){
  $is_error = true;
  $errors['begin'][] = '開始日時を入力してください';
}
//終了日時が無かったらエラー
if($_POST['end'] == ''){
  $is_error = true;
  $errors['end'][] = '終了日時を入力してください';
}
//内容が無かったらエラー
if($_POST['content'] == ''){
  $is_error = true;
  $errors['content'][] = '内容を入力してください';
}

if($is_error){
  //エラーの有無フラグを設定する
  $errors['is_error'] = $is_error;
  //エラー用のセッションを設定
  $_SESSION['input_error'] = $errors;
  header('Location: http://133.242.133.66/maffi/test/admin/entry_input.php');
  exit;
}

//テンプレートに値を割り当てる
$smarty->assign('data', $_POST);

//ヘッダ用変数の設定
$header['user'] = $_SESSION['login'];
$header['pageName'] = '登録確認';
$header['logout_url'] = ADMIN_LOGOUT_URL;

$smarty->assign('header', $header);

//テンプレート表示
$smarty->display('admin/entry_confirm.tpl');

//共通の後処理
require_once('../finalize.inc.php');


