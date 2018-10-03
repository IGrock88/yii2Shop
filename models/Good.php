<?php

namespace app\models;

use mohorev\file\UploadImageBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "good".
 *
 * @property int $id
 * @property string $title
 * @property string $title_img
 * @property int $price
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
 * @mixin UploadImageBehavior
 */
class Good extends \yii\db\ActiveRecord
{

    const BIG_IMG = 'big';
    const SMALL_IMG = 'small';

    const SCENARIO_UPDATE = 'update_good';
    const SCENARIO_CREATE = 'create_good';
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
            [
                'class' => \mohorev\file\UploadImageBehavior::class,
                'attribute' => 'title_img',
                'scenarios' => [self::SCENARIO_UPDATE, self::SCENARIO_CREATE],
                'placeholder' => '@webroot/upload/default/pic.jpg',
                'path' => '@webroot/upload/products/{id}',
                'url' => '@web/upload/products/{id}',
                'thumbs' => [
                    self::BIG_IMG => ['width' => 568],
                    self::SMALL_IMG => ['width' => 233, 'height' => 385],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'price', 'category_id'], 'required'],
            [['price', 'view', 'category_id', 'created_at', 'updated_at'], 'integer'],
            [['title', 'short_description', 'full_description'], 'string', 'max' => 255],

            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [
                'title_img', 'image', 'extensions' => 'jpg, jpeg, gif, png', 'on' => [self::SCENARIO_UPDATE, self::SCENARIO_CREATE],
                'minSize' => '100',
                'maxSize' => '10000000'
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Наименование',
            'title_img' => 'Титульная картинка',
            'price' => 'Цена',
            'short_description' => 'Краткое описание',
            'full_description' => 'Полное описание',
            'view' => 'Просмотры',
            'category_id' => 'ID Категории',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлен',
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


    public function getBigTitleImg()
    {
        return $this->getThumbUploadUrl('title_img', Good::BIG_IMG);
    }

    public function getSmallTitleImg()
    {
        return $this->getThumbUploadUrl('title_img', Good::SMALL_IMG);
    }

}
