<?php

namespace raphaelbsr\material\widgets;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu as YiiMenu;

class Menu extends YiiMenu {

    public $linkTemplate = '<a class="nav-link" href="{url}">{icon} {label}</a>';
    public $dropdownIcon = '<span class="pull-right"><i class="material-icons">arrow_drop_down</i></span>';
    public $submenuTemplate = "\n<ul class='nav tree' {show}>\n{items}\n</ul>\n";

    /**
     * @inheritdoc
     */
    public function init() {
        Html::addCssClass($this->options, 'nav');
        Html::addCssClass($this->itemOptions, 'nav-item');
        parent::init();
    }

    /**
     * @inheritdoc
     */
    protected function renderItem($item) {
        
        $labelTemplate = $this->labelTemplate;
        $linkTemplate = $this->linkTemplate;
        $template = ArrayHelper::getValue($item, 'template', $linkTemplate);
        $replace = !empty($item['icon']) ? [
            '{url}' => Url::to(isset($item['url']) ? $item['url'] : '#'),
            '{label}' => '<p>' . $item['label'] . '</p>',
            '{icon}' => '<i class="material-icons">' . $item['icon'] . '</i> ',
            '{dropdownicon}' => $this->dropdownIcon,
            '{class}' => empty($item['items']) ? '' : 'tree-toggle'
                ] : [
            '{url}' => Url::to($item['url']),
            '{label}' => '<p>' . $item['label'] . '</p>',
            '{icon}' => null,
            '{dropdownicon}' => $this->dropdownIcon,
            '{class}' => empty($item['items']) ? '' : 'tree-toggle'
        ];
        return strtr($template, $replace);
    }

}
