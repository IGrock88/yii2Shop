<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 03.10.2018
 * Time: 10:09
 */

namespace app\services;

class CategoryService
{

    public function getAllCategories()
    {
        return \app\models\Category::find()->select('name')->indexBy('id')->column();
    }
}