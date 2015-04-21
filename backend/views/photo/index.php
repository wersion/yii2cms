<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\photoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '图片';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加图片', ['create?column_id='.Yii::$app->request->get('column_id').'&article_id='.Yii::$app->request->get('article_id')], ['class' => 'btn btn-success']) ?>
    </p>

    <?php /*GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'url:url',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);*/ ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'column_id',
            'title',
            [
                'attribute' => 'created_at',
                'label'=>'上传时间',
                'value' => function ($model) {
                    return  date('Y-m-d H:i:s',$model->created_at);
                },
            ],
            [
                'attribute' => 'url',
                'label'=>'图片',
                'format'=>'html',
                'value' => function ($model) {
                    return  Html::img($model->url,['width'=>128,'style'=>'margin-left:20px']);
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons'=>[
                    'delete'=>function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                            'title' => Yii::t('yii', 'Delete'),
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            // 'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                    }
                ]
            ],
        ],
    ]);
    ?>

</div>
