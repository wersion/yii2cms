<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "photo".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property string $description
 * @property string $place
 * @property integer $column_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'url', 'description', 'place'], 'required'],
            [['column_id', 'status'], 'integer'],
            [['sort','column_id'],'safe'],
            [['title', 'description', 'place'], 'string', 'max' => 255],
            [['url'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'url' => 'Url',
            'description' => 'Description',
            'place' => 'Place',
            'column_id' => 'Column ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
