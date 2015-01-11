<?php
/**
 * @link https://github.com/nirvana-msu/yii2-showloading
 * @copyright Copyright (c) 2014 Alexander Stepanov
 * @license MIT
 */

namespace nirvana\showloading;

use Yii;
use yii\web\AssetBundle;

/**
 * @author Alexander Stepanov <student_vmk@mail.ru>
 */
class ShowLoadingAsset extends AssetBundle
{
    public $sourcePath = '@vendor/nirvana-msu/yii2-showloading/assets';
    public $css = [
        'css/showLoading.css',
    ];
    public $js = [  // Configured conditionally (source/minified) during init()
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
        $this->js[] = YII_DEBUG ? 'js/jquery.showLoading.js' : 'js/jquery.showLoading.min.js';
    }
}
