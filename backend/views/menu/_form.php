<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Ueditor;
use common\widgets\ImageUpload;
use common\widgets\Models;
use common\widgets\Template;
use common\widgets\fields\SelectTree;
//use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model backend\models\Column */
/* @var $form yii\widgets\ActiveForm */
$cache = Yii::$app->cache;

$data = $cache['menu'];
foreach($data as $k=>$v)
{
    if($v['id']==Yii::$app->request->get('id') and Yii::$app->requestedAction->id=='update')
    {
        unset($data[$k]);

    }
}
?>
<!-- START CUSTOM TABS -->

<div class="row">
    <div class="col-md-8">
        <?php $form = ActiveForm::begin();?>
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">基本信息</a></li>
                <li><a href="#tab_2" data-toggle="tab">属性选择</a></li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <?= SelectTree::widget(['model'=>$model,'name'=>'parentid','data'=>$data])?>
                    <?= $form->field($model, 'cname')->textInput() ?>
                    <?= Ueditor::widget(['model'=>$model,'name'=>'content'])?>

                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <?= Models::widget(['model'=>$model,'form'=>$form])?>

                    <?= Template::widget(['model'=>$model,'form'=>$form])?>

                    <?= $form->field($model, 'route')->textInput() ?>

                    <?= $form->field($model, 'link')->textInput() ?>

                    <?= $form->field($model,'place')->checkboxList(['1'=>'主导航','2'=>'底部导航'])?>

                    <?= $form->field($model,'sort')->textInput(['maxlength' => 4,'style'=>'width:50px']) ?>

                    <?= ImageUpload::widget(['model'=>$model,'attribute'=>'file'])?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div><!-- /.col -->

</div> <!-- /.row -->
<!-- END CUSTOM TABS -->
