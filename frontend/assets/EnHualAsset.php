<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class EnHualAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style-en.css',
        'css/pages.css',
    ];
    public $js = [

        // 'js/jquery.js',
        'js/index.js',
        'js/map.js',
        'js/scroll.1.3.js',
        'js/index_scrollimg.js',

    ];
    public $depends = [
        //'yii\web\YiiAsset',
    ];
}
