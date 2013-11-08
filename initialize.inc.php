<?php

//外部出力バッファをONにする
ob_start();
session_start();

  //エラー出力を強制的にONにする
  ini_set('display_errors', 'on');
  //出力するエラーを制限しない(全部だす)
  error_reporting(E_ALL);

//ini_set('display_errors', 'off');

  //タイムゾーンの設定
  date_default_timezone_set('Asia/Tokyo');

  //Smartyを使う為の準備
require_once('/opt/www/Smarty-3.1.12/libs/Smarty.class.php');

  //Smartyインスタンスを作る
  $smarty = new Smarty();

  //Smartyにテンプレートファイルの居場所を教える
  $smarty->template_dir = '/home/maffi/htdocs/original/templates/';

  //Smartyの作業場所を指定する(パーミッション０７７７に設定する)
  $smarty->compile_dir = '/home/maffi/smarty/mailform/templates_c/';
//-----------ここまで共通の処理