<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "good_img".
 *
 * @property int $id
 * @property int $good_id
 * @property string $img_path
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 *
 * @property Good $good
 */
class GoodImg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'good_img';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['good_id', 'img_path', 'created_by'], 'required'],
            [['good_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['img_path'], 'string', 'max' => 255],
            [['good_id'], 'exist', 'skipOnError' => true, 'targetClass' => Good::className(), 'targetAttribute' => ['good_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'good_id' => 'Good ID',
            'img_path' => 'Img Path',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGood()
    {
        return $this->hasOne(Good::className(), ['id' => 'good_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\GoodImgQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\GoodImgQuery(get_called_class());
    }
}
