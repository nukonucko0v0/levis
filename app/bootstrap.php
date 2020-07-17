<?php
//HTTPSを強制
if (defined('PRODUCTION') && !ssl(true) && MAIN_PATH === '') {
    redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
}

// Composer autoload.php
require_once __DIR__ . '/../common/libs/vendor/autoload.php';

// EFTEC/BladeOne import
// use eftec\bladeone\BladeOne;
// $views = __DIR__ . '/views';
// $cache = __DIR__ . '/cache';
// $_blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);
// echo $_blade->run("home.index",array("variable1"=>"value1"));