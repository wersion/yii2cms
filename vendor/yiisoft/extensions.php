<?php

$vendorDir = dirname(__DIR__);

return array (
  'yiisoft/yii2-swiftmailer' => 
  array (
    'name' => 'yiisoft/yii2-swiftmailer',
    'version' => '2.0.3.0',
    'alias' => 
    array (
      '@yii/swiftmailer' => $vendorDir . '/yiisoft/yii2-swiftmailer',
    ),
  ),
  'yiisoft/yii2-codeception' => 
  array (
    'name' => 'yiisoft/yii2-codeception',
    'version' => '2.0.3.0',
    'alias' => 
    array (
      '@yii/codeception' => $vendorDir . '/yiisoft/yii2-codeception',
    ),
  ),
  'yiisoft/yii2-bootstrap' => 
  array (
    'name' => 'yiisoft/yii2-bootstrap',
    'version' => '2.0.3.0',
    'alias' => 
    array (
      '@yii/bootstrap' => $vendorDir . '/yiisoft/yii2-bootstrap',
    ),
  ),
  'yiisoft/yii2-debug' => 
  array (
    'name' => 'yiisoft/yii2-debug',
    'version' => '2.0.3.0',
    'alias' => 
    array (
      '@yii/debug' => $vendorDir . '/yiisoft/yii2-debug',
    ),
  ),
  'yiisoft/yii2-gii' => 
  array (
    'name' => 'yiisoft/yii2-gii',
    'version' => '2.0.3.0',
    'alias' => 
    array (
      '@yii/gii' => $vendorDir . '/yiisoft/yii2-gii',
    ),
  ),
  'yiisoft/yii2-faker' => 
  array (
    'name' => 'yiisoft/yii2-faker',
    'version' => '2.0.3.0',
    'alias' => 
    array (
      '@yii/faker' => $vendorDir . '/yiisoft/yii2-faker',
    ),
  ),
  'mihaildev/yii2-ckeditor' => 
  array (
    'name' => 'mihaildev/yii2-ckeditor',
    'version' => '1.0.1.0',
    'alias' => 
    array (
      '@mihaildev/ckeditor' => $vendorDir . '/mihaildev/yii2-ckeditor',
    ),
  ),
  'funson86/yii2-setting' => 
  array (
    'name' => 'funson86/yii2-setting',
    'version' => '0.01.0.0',
    'alias' => 
    array (
      '@funson86/setting' => $vendorDir . '/funson86/yii2-setting',
    ),
    'bootstrap' => 'funson86\\setting\\Bootstrap',
  ),
  'funson86/yii2-cms' => 
  array (
    'name' => 'funson86/yii2-cms',
    'version' => '2.0.1.0',
    'alias' => 
    array (
      '@funson86/cms' => $vendorDir . '/funson86/yii2-cms',
    ),
    'bootstrap' => 'funson86\\cms\\Bootstrap',
  ),
);
