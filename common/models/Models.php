<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "models".
 *
 * @property integer $id
 * @property string $name
 */
class Models extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'models';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','ename'], 'required'],
            [['name'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '中文名称',
            'ename' => '英文名称',
        ];
    }
}
