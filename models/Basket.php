<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "basket".
 *
 * @property int $id
 * @property int $quantity
 * @property int $good_id
 * @property int $user_id
 * @property int $order_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Good $good
 * @property Order $order
 * @property User $user
 */
class Basket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'basket';
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
            [['quantity', 'good_id'], 'required'],
            [['quantity', 'good_id', 'user_id', 'order_id', 'created_at', 'updated_at'], 'integer'],
            [['good_id'], 'exist', 'skipOnError' => true, 'targetClass' => Good::className(), 'targetAttribute' => ['good_id' => 'id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quantity' => 'Quantity',
            'good_id' => 'Good ID',
            'user_id' => 'User ID',
            'order_id' => 'Order ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\BasketQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\BasketQuery(get_called_class());
    }
}
