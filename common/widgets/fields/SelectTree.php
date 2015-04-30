<?php
namespace common\widgets\fields;
use yii\base\Widget;
/**
 *
 */
class SelectTree extends Widget
{
    public $name;
    public $model;
    public $data;

    public function run()
    {

        return $this->render('selectTree',['name'=>$this->name,'model'=>$this->model,'menu'=>$this->data]);

    }
}
?>