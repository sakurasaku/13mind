<?php
//共通の前処理
require_once('../initialize.inc.php');

//POST確認(debug用)
//var_dump($_POST);

//入力チェック

  //エラー有無のチェックを無しにしておく
$is_error = false;
  //エラー用の配列を初期化する
$errors = array();

  //名前が無かったらエラー
  if($_POST['name'] == ''){
    $is_error = true;
    $errors['name'][] = '名前を入力してください';
  }

  //メールアドレスが無かったらエラー
  if($_POST['mail'] == ''){
    $is_error = true;
    $errors['mail'][] = 'メールアドレスを入力してください';
  }else{
    if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['mail'])){
      $is_error = true;
      $errors['mail'][] = 'メールアドレスの形式が間違ってます';
    }
  }


  //電話番号が無かったらエラー
  if($_POST['tel'] == ''){
    $is_error = true;
    $errors['tel'][] = '電話番号を入力してください';
  }else{
    if (!preg_match("/^\d{2,4}\-\d{2,4}\-\d{2,4}$/", $_POST['tel'])){
      $is_error = true;
      $errors['tel'][] = '電話番号の形式が間違ってます';
    }
  }

/*
  //職業が無かったらエラー
  if($_POST['job'] == ''){
    $is_error = true;
    $errors['job'][] = '職業を選択してください';
  }
*/
  //問い合わせが入力されてなかったらエラー
  if($_POST['word'] == ''){
    $is_error = true;
    $errors['word'][] = 'お問い合わせ内容を入力してください';
  }

//POSTデータをSESSIONに設定する
$_SESSION['post_data'] = $_POST;

  //エラーがあったら
if($is_error){
  //エラーの有無フラグを設定する
  $errors['is_error'] = $is_error;
  //エラー用のセッションを設定
  $_SESSION['input_error'] = $errors;

  //入力フォームに戻す
  header('Location: http://133.242.133.66/maffi/test/contact/index.php');
  exit;
}


//テンプレートにデータを渡す
$smarty->assign('data', $_POST);

  error_reporting(E_ALL ^ E_NOTICE); // Noticeを抑止 ビット演算子 (エックスオア)

//テンプレート表示
$smarty->display('contact/contactform_confirm.tpl');

//共通の後処理
require_once('../finalize.inc.php');















