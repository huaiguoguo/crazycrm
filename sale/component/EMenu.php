<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/8
 * Time: 18:23
 */

namespace sale\component;


use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Menu;

class EMenu extends Menu
{
    public $submenuTemplate = "\n<ul class=\"nav nav-second-level collapse\">\n{items}\n</ul>\n";
    public $subsubmenuTemplate = "\n<ul class=\"nav nav-third-level collapse\">\n{items}\n</ul>\n";


    protected function renderItems($items)
    {
        $n = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            $options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
            $tag = ArrayHelper::remove($options, 'tag', 'li');
            $class = [];
            if ($item['active']) {
                $class[] = $this->activeCssClass;
            }
            if ($i === 0 && $this->firstItemCssClass !== null) {
                $class[] = $this->firstItemCssClass;
            }
            if ($i === $n - 1 && $this->lastItemCssClass !== null) {
                $class[] = $this->lastItemCssClass;
            }
            Html::addCssClass($options, $class);

            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
//                echo $item['level']."<br/>";
                if($item['level'] ==2){
                    $this->submenuTemplate = $this->subsubmenuTemplate;
                }

                $submenuTemplate = ArrayHelper::getValue($item, 'submenuTemplate', $this->submenuTemplate);
                $menu .= strtr($submenuTemplate, [
                    '{items}' => $this->renderItems($item['items']),
                ]);
            }
            $lines[] = Html::tag($tag, $menu, $options);
        }

        return implode("\n", $lines);
    }

}