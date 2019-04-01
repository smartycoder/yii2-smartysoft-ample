yii2-smartysoft-ample
========================
yii2-smartysoft-ample

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist smartysoft/yii2-smartysoft-ample "*"
```

or add

```
"smartysoft/yii2-smartysoft-ample": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by adding this to your view or layout :

```php
<?php smartysoft\ample\web\ampleAsset::register($this); ?>