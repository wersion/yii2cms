<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/3/23
 * Time: 14:23
 */

namespace frontend\widgets;
use yii;

class Menu extends \yii\bootstrap\Widget{

    public $lang = 0;
    public function run()
    {

        $cache = Yii::$app->cache;
        $menu = $cache['menu'];
        unset($menu[2]);
        return $this->render('menu',['menu'=>$menu,'lang'=>$this->lang]);
    }

} 