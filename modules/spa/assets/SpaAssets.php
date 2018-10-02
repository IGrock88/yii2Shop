<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 02.10.2018
 * Time: 9:32
 */

namespace app\modules\spa\assets;

use yii\web\AssetBundle;

class SpaAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [
        'js/index.js'
    ];
    public $depends = [

    ];
}