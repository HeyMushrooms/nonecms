<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'think\\worker\\' => array($vendorDir . '/topthink/think-worker/src'),
    'think\\composer\\' => array($vendorDir . '/topthink/think-installer/src'),
    'think\\captcha\\' => array($vendorDir . '/topthink/think-captcha/src'),
    'think\\' => array($vendorDir . '/topthink/think-image/src'),
    'app\\' => array($baseDir . '/application'),
    'Workerman\\' => array($vendorDir . '/workerman/workerman', $vendorDir . '/workerman/workerman-for-win'),
);
