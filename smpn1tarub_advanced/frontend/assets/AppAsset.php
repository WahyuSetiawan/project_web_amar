<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'layout/styles/layout.css',
        'layout/styles/forms.css',
        'layout/styles/navi.css',
        'layout/styles/tables.css',
        'layout/styles/loginsider.css', 
        'layout/styles/feature_slide.css',
        'layout/scripts/prettyphoto/prettyPhoto.css',
    ];
    public $js = [
        'layout/scripts/jquery.min.js',
        'layout/scripts/jquery.cycle.min.js',
        'layout/scripts/prettyphoto/jquery.prettyPhoto.js',
        'layout/scripts/jquery.slidepanel.setup.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
        
    ];
}
