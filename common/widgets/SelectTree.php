<?php
namespace common\widgets;
use yii\base\Widget;
/**
 *
 */
class SelectTree extends Widget
{
    public $name;
    public $model;

    public function run()
    {
        $cache = Yii::$app->cache;
        $menu = $cache['menu'];

        return $this->render('selectTree',['name'=>$this->name,'model'=>$this->model],'mmenu',$menu);
        //return $this->name2;
    }
}
?>