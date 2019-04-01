yii2-smartysoft-inspinia
========================
yii2-smartysoft-inspinia

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist smartysoft/yii2-smartysoft-inspinia "*"
```

or add

```
"smartysoft/yii2-smartysoft-inspinia": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by adding this to your view or layout :

```php
<?php smartysoft\inspinia\web\InspiniaAsset::register($this); ?>