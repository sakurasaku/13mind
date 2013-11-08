<?php
//入力フォーム
//共通の前処理
require_once('../admin_initialize.inc.php');

//ヘッダ用変数の設定
$header['user'] = $_SESSION['login'];
$header['pageName'] = 'TOP';
$header['logout_url'] = ADMIN_LOGOUT_URL;

$smarty->assign('header', $header);

//テンプレート表示
$smarty->display('admin/index.tpl');

//共通の後処理
require_once('../finalize.inc.php');
