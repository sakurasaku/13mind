<?php
//入力フォーム
//共通の前処理
require_once('../admin_initialize.inc.php');

$_SESSION = array();
unset($_SESSION);

header('Location: http://133.242.133.66/maffi/test/index.php');

//共通の後処理
require_once('../finalize.inc.php');
