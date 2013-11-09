<?php
//入力フォーム
//共通の前処理
require_once('include/initialize.inc.php');

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
//$form_data = array();

//セッションがあったら
if(isset($_SESSION['post_data'])){

  //フォームに送る変数に値を取り込んでおく

//  $form_data = $_SESSION['post_data'];

  //多次元配列の取り出し
  $name = $_SESSION['post_data']['name'];
  $mail = $_SESSION['post_data']['mail'];
  $tel = $_SESSION['post_data']['tel'];
  /*mなら男fなら女
  if($_SESSION['post_data']['sex'] === 'm'){
    $sex = '男';
  }else{
    $sex = '女';
  }*/
  //性別が入力されてる時だけ作動させる
  if(isset($_SESSION['post_data']['sex'])){
    $sex = $_SESSION['post_data']['sex'];
  }
  $job = $_SESSION['post_data']['job'];
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


/*  ===  まとめる為に消す  ===
  $smarty->assign('is_error', '');
  $smarty->assign('errorflag_name', '');
  $smarty->assign('errorflag_sex', '');
  ==========================*/
  $smarty->assign('name', $name);
  $smarty->assign('mail', $mail);
  $smarty->assign('tel', $tel);
  $smarty->assign('sex', $sex);
  $smarty->assign('job', $job);
  $smarty->assign('word', $word);
  $smarty->assign('errors', $errors);


//テンプレート表示
$smarty->display('mailform_input.tpl');

//共通の後処理
require_once('include/finalize.inc.php');
