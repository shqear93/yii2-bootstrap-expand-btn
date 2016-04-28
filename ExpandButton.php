<?php

/**
 * @link    http://foundationize.com
 * @package foundationize/yii2-foundation
 * @version 1.0.0
 */

namespace shqear\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\base\Exception;

/**
 * Description of ExpandButton
 */
class ExpandButton extends Widget
{
    const TYPE_PRIMARY = 'primary';
    const TYPE_SUCCESS = 'success';
    const TYPE_INFO = 'info';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_LINK = 'link';

    public $label = null;

    /**
     * @var array the HTML attributes of the button.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['class' => 'btn'];

    /**
     * The button url, used only for split button
     * @var string Button url
     */
    public $url = null;

    /**
     * The button url, used only for split button
     * @var string Button url
     */
    public $urlOptions = [];

    /**
     * @var string icon class
     */
    public $iconClass = 'glyphicon glyphicon-star';

    /**
     * @var string button type
     */
    public $type = self::TYPE_PRIMARY;

    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'button';

    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;

    /**
     * Renders the widget.
     */
    public function run()
    {
        ExpandButtonAsset::register(\Yii::$app->view);
        if ($this->url) {
            echo Html::a($this->renderButton(), $this->url, $this->urlOptions);
        } else {
            echo $this->renderButton();
        }
    }

    /**
     * Generates the expand button.
     * @return string the rendering result.
     * @throws Exception
     */
    protected function renderButton()
    {
        if (empty($this->label)) {
            throw new Exception('you must set \'label\' for expand button');
        }
        Html::addCssClass($this->options, ['btn-' . $this->type, 'btn-expand']);
        $label = $this->encodeLabel ? Html::encode($this->label) : $this->label;
        return Html::tag($this->tagName, Html::tag('i', null, ['class' => $this->iconClass]) . ' ' . $label, $this->options);
    }
}
