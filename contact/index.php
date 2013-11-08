<?php

//初期処理
require_once('../initialize.inc.php');

//セッション変数の確認
//var_dump($_SESSION);

//変数の初期化
$name = '';
$mail = '';
$tel = '';
$sex = '';
$job = '';
$word = '';
$errors = array();
//$form_data = array();  着いていけず

//セッションがあったら
if(isset($_SESSION['post_data'])){

  //フォームに送る変数に値を取り込んでおく

//  $form_data = $_SESSION['post_data'];  着いていけず

  //多次元配列の取り出し
  $name = $_SESSION['post_data']['name'];
  $mail = $_SESSION['post_data']['mail'];
  $tel = $_SESSION['post_data']['tel'];

  $word = $_SESSION['post_data']['word'];
}

if(isset($_SESSION['input_error'])){
  $errors = $_SESSION['input_error'];
}

//いったんSESSIONを空にしておく
  $_SESSION['post_data'] = array();
  unset($_SESSION['post_data']);
  $_SESSION['input_error'] = array();
  unset($_SESSION['input_error']);


  $smarty->assign('name', $name);
  $smarty->assign('mail', $mail);
  $smarty->assign('tel', $tel);
  $smarty->assign('sex', $sex);
  $smarty->assign('job', $job);
  $smarty->assign('word', $word);
  $smarty->assign('errors', $errors);


//  error_reporting(E_ALL ^ E_NOTICE); // Noticeを抑止 ビット演算子 (エックスオア)

  //テンプレートから出力
  $smarty->display('contact/contactform_input.tpl');


//後処理
require_once('../finalize.inc.php');
