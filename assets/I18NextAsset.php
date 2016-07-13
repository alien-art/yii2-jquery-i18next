<?php
namespace alien\jquery_i18next\assets;

use yii\web\AssetBundle;

/**
 * 13 July 2016
 *
 * @author Alien-art <alien@alien-art.com>
 * Class Asset
 * @package alien\jquery_i18next\assets\I18NextAsset
 */
class I18NextAsset extends AssetBundle
{
    public $sourcePath = '@bower/i18next';
    public $path = '';
    public $css = [];
    public $js = [
        'i18next.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}