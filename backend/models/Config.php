<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property integer $id
 * @property string $site_name
 * @property string $site_description
 * @property string $site_key_words
 * @property string $flag
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'ename', 'value'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'ename' => 'Ename',
            'value' => 'Value',
        ];
    }
}
