<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 03.10.2018
 * Time: 15:50
 */

namespace app\modules\api\controllers;


use yii\rest\ActiveController;

class GoodController extends ActiveController
{
    public $modelClass = 'app\modules\api\models\Good';
}