<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/4/27
 * Time: 13:58
 */

namespace modules\filemanage\controllers;

use yii;
use yii\web\Controller;
class IndexController extends Controller{

        public function actionIndex()
        {
            return $this->render('index');
        }
} 