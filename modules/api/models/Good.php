<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 03.10.2018
 * Time: 15:52
 */


namespace app\modules\api\models;

class Good extends \app\models\Good
{

    public function fields()
    {
        return ['id', 'title', 'price', 'category'];
    }

    public function extraFields()
    {
        return ['BigTitleImg', 'SmallTitleImg'];
    }


}