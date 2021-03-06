<?php

namespace backend\models;

use common\models\PhotoMenu;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $cname
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $isChild
 * @property integer $isArticle
 * @property Article[] $articles
 * @property Article $id0
 */
class menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }


    public function init()
    {
        parent::init();
        $this->parentid = Yii::$app->request->get('id');
    }

    public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::className(),
        ];
    }


    public function beforeSave($insert)
    {
        parent::beforeSave($insert);
        if(is_array($this->place))
            $this->place = implode(',',$this->place);

        return true;
    }

    public function afterFind()
    {
        $this->place = explode(',',$this->place);
    }

    public function afterSave( $insert, $changedAttributes )
    {
        echo $this->id;
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['parentid', 'cname','model_id'], 'required'],
            [['sort','template_id','file','isArticle','url','isShow','content','link','route','place'],'safe'],
            [['parentid', 'status'], 'integer']
        ];
    }



    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parentid' => '上级菜单',
            'sort' => '排序',
            'cname' => '栏目名称',
            'route' => '路由',
            'place'=>'菜单位置',
            'model_id' => '选择模型',
            'template_id' => '选择模板',
            'isArticle' => '是否单网页',
            'isChild' => '是否有子类',
            'isShow' => '是否在导航栏显示',
            'status' => 'Status',
            'content' => '栏目介绍',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['menu_id' => 'id'])->asArray();

    }


    public function getPhotos()
    {
        return $this->hasMany(PhotoMenu::className(), ['menu_id' => 'id'])->asArray();

    }

    public function getBrother($id)
    {
        return $this->find()->where("parentid=".$id)->asArray()->all();
    }

    public function getParent($pid)
    {
        if($pid)
            return $this->findOne($pid)->toArray();
    }

    public function getParents($id)
    {

        $pid_row = $this->findOne($id)->toArray();

        $pid=$pid_row['parentid'];

        if($pid_row['parentid'])
        {
            $pid.= ','.$this->getParents($pid_row['parentid']);
        }

        return $pid;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId()
    {
        return $this->hasOne(Article::className(), ['menu_id' => 'id']);
    }
}