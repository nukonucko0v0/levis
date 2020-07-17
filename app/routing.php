<?php
// 管理画面
if (isset($_params[0]) && !empty($_params[0]) && preg_match('/^admin$/', $_params[0])) {

    $GLOBALS['_routing'] = $_params[0];

    $_REQUEST['_mode'] = empty($_params[1]) ? 'home'  : $_params[1];
    $_REQUEST['_work'] = empty($_params[2]) ? 'index' : $_params[2];

// admin 以外のアクセスはユーザー画面として処理
} else {
    $_REQUEST['_mode'] = empty($_params[0]) ? 'home'  : $_params[0];
    $_REQUEST['_work'] = empty($_params[1]) ? 'index' : $_params[1];

    // GET があれば優先する
    if (isset($_GET['_mode'])) {
        $_REQUEST['_mode'] = $_GET['_mode'];
    }
}