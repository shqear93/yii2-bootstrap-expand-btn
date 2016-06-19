** NOT READY YET **
Yii2 Bootstrap Expand Btn
=============
Provide expanding buttons for Bootstrap 3.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run
```
php composer.phar require --prefer-dist shqear/yii2-bootstrap-expand-btn "*"
```
or add
```
"shqear/yii2-bootstrap-expand-btn": "*"
```

to the require section of your `composer.json` file.

![Bootstrap Expand Btn](expand-btn.gif)

Usage
-----
```php
echo ExpandButton::widget([
    'label' => 'Test Button', 'type' => ExpandButton::TYPE_INFO,
]);
```

Legals
------
based on : http://smarchal.com/bootstrap-expand-btn
- Author : [Khaled AbuShqear] (Qmax93@Gmail.com)
- Licence : [MIT](http://opensource.org/licenses/MIT) 
- Contact : [Qmax93@Gmail.com](https://fb.me/shqear)
- Link  : [http://smarchal.com/bootstrap-expand-btn]()
