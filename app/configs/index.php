<?php
/**
 *
 * コンフィグファイルをここでまとめて読み込む
 *
**/

if (is_file(MAIN_PATH . MAIN_APPLICATION_PATH . 'app/config.local.php')) {
    import('app/configs/config.local.php');
}