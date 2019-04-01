<?php
/**
 * Created by IntelliJ IDEA.
 * User: matjazz
 * Date: 25/03/2019
 * Time: 11:01
 */

namespace smartysoft\ample\widgets;


use yii\helpers\Html;

class Alert extends \yii\bootstrap\Alert
{

    protected function initOptions()
    {
        Html::addCssClass($this->options, ['alert', 'fade', 'show']);

        if ($this->closeButton !== false) {
            $this->closeButton = array_merge([
                'data-dismiss' => 'alert',
                'aria-hidden' => 'true',
                'class' => 'close',
            ], $this->closeButton);
        }
    }

}