<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property integer $p_id
 * @property string $start_date
 * @property string $name
 * @property string $image
 * @property string $description
 *
 * @property Platform $p
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_id'], 'integer'],
            [['start_date'], 'safe'],
            [['name', 'image'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['p_id'], 'exist', 'skipOnError' => true, 'targetClass' => Platform::className(), 'targetAttribute' => ['p_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'platform.name' => 'Platform',
            'start_date' => 'Start Date',
            'name' => 'Name',
            'image' => 'Image',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlatform()
    {
        return $this->hasOne(Platform::className(), ['id' => 'p_id']);
    }
}
