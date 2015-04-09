<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/3/23
 * Time: 14:23
 */

namespace frontend\widgets;
use yii;

class Column extends \yii\bootstrap\Widget{

    public $lang = 0;
    public function run()
    {

        $cache = Yii::$app->cache;
        $columns = $cache['columns'];
        return $this->render('column',['columns'=>$columns,'lang'=>$this->lang]);
    }

} 