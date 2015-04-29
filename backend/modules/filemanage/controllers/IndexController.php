<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/4/27
 * Time: 13:58
 */

namespace backend\modules\filemanage\controllers;

use yii;
use yii\web\Controller;
class IndexController extends Controller{

    public $defaultRoute = 'index';
    public $layout = 'main';

    public function actionIndex()
    {
        return $this->render('index');
    }
} 