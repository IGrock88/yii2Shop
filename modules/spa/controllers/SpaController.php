<?php

namespace app\modules\spa\controllers;

use app\modules\spa\assets\SpaAssets;
use yii\web\Controller;

/**
 * Default controller for the `spa` module
 */
class SpaController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = false;
        SpaAssets::register($this->view);
        return $this->render('index');
    }
}
