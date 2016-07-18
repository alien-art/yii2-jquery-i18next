<?php
namespace alien\jquery_i18next\assets;

use yii\web\AssetBundle;

/**
 * 13 July 2016
 *
 * @author Alien-art <alien@alien-art.ru>
 * Class Asset
 * @package alien\jquery_i18next\assets\JqueryI18NextAsset
 */
class JqueryI18NextAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-i18next';
    public $path = '';
    public $css = [];
    public $js = [
        'jquery-i18next.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'alien\jquery_i18next\assets\I18nextXHRBackendAsset',
        'alien\jquery_i18next\assets\I18NextAsset',
    ];
}