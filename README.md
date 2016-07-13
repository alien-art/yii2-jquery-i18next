# yii2-jquery-i18next
Init assets for use [jquery-i18next](https://github.com/i18next/jquery-i18next) and  [i18next](http://i18next.com/) for Yii2 framework

## Install

Add github repository to composer.json file

```json
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/alien-art/yii2-jquery-i18next.git"
        }
    ]
```
and then

```
php composer.phar require --prefer-dist "alien/yii2-jquery-i18next" "*"
```

## Use

To use an asset bundle, register it with a [view](structure-views.md) by calling the [[yii\web\AssetBundle::register()]]
method. For example, in a view template you can register an asset bundle like the following:

### for use use jquery-i18next
```php
use alien\jquery_i18next\assets\JqueryI18NextAsset; //for use jquery-i18next
...
JqueryI18NextAsset::register($this);  // $this represents the view object
```

### for use use i18next only
```php
use alien\jquery_i18next\assets\I18NextAsset;
...
I18NextAsset::register($this);  // $this represents the view object
```




