<?php
//入力フォーム
//共通の前処理
require_once('initialize.inc.php');

if(!isset($_SESSION['login'])){
  header('Location: http://133.242.133.66/maffi/test/admin/index.admin_login.php');
  exit;
}


