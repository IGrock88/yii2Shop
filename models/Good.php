<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "good".
 *
 * @property int $id
 * @property string $title
 * @property string $title_img
 * @property string $short_description
 * @property string $full_description
 * @property int $view
 * @property int $category_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Basket[] $baskets
 * @property Category $category
 * @property GoodImg[] $goodImgs
 */
class Good extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'good';
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
            [['title', 'category_id'], 'required'],
            [['view', 'category_id', 'created_at', 'updated_at'], 'integer'],
            [['title', 'title_img', 'short_description', 'full_description'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'title_img' => 'Title Img',
            'short_description' => 'Short Description',
            'full_description' => 'Full Description',
            'view' => 'View',
            'category_id' => 'Category ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaskets()
    {
        return $this->hasMany(Basket::className(), ['good_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodImgs()
    {
        return $this->hasMany(GoodImg::className(), ['good_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\GoodQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\GoodQuery(get_called_class());
    }
}
