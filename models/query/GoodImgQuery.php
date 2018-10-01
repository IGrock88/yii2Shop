<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\GoodImg]].
 *
 * @see \app\models\GoodImg
 */
class GoodImgQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\GoodImg[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\GoodImg|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
