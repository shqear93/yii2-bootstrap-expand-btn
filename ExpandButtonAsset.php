<?php

/**
 * @package shqear/bootstrap
 * @version dev
 */

namespace shqear\widgets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Widget js files.
 * @since 0.0.1
 * @see
 */
class ExpandButtonAsset extends AssetBundle
{
    public function init()
    {
        parent::init();
        \Yii::$app->view->registerCss('
.btn-expand {
    max-width: 16px;
    box-sizing: content-box;
    color: rgba(0, 0, 0, 0);
    transition: max-width .2s ease;
}

.btn-expand.btn-xs {
    max-width: 12px;
}

.btn-expand.btn-sm {
    max-width: 14px;
}

.btn-expand.btn-lg {
    max-width: 18px;
}

.btn-expand i {
    color: #333;
}

.btn-expand.btn-link i {
    color: #428bca;
}

.btn-expand.btn-primary i,
.btn-expand.btn-success i,
.btn-expand.btn-info i,
.btn-expand.btn-warning i,
.btn-expand.btn-danger i {
    color: #fff;
}

.btn-expand:hover,
.btn-expand:focus,
.btn-expand:active {
    max-width: 400px;
    transition-duration: .5s;
}
');
    }
}
