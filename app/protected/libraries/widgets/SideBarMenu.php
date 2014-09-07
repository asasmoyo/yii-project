<?php

class SideBarMenu extends CWidget
{

    public $header;
    public $items;

    public function run()
    {
        $html = '<div class="list-group">';

        if ($this->header) {
            $html .= '
                <div class="list-group-item">
                    <h4 class="list-group-item-heading"> ' . $this->header . '</h4>
                </div>
            ';
        }

        foreach ($this->items as $item) {
            $itemHtml = $this->createItemHtml($item);
            $html .= $itemHtml;
        }
        $html .= '</div>';

        echo $html;
    }

    private function createItemHtml($item)
    {
        $result = '
        <a class="list-group-item ' . $this->getActive($item) . '" href="' . $this->getUrl($item) . '">
            ' . $this->getIcon($item) . ' ' . $this->getLabel($item) . '
        </a>
        ';
        return $result;
    }

    private function getActive($item)
    {
        if ($this->getValue($item, 'active')) {
            return 'active';
        }
        return '';
    }

    private function getUrl($item)
    {
        if ($url = $this->getValue($item, 'url')) {
            return $url;
        }
    }

    private function getIcon($item)
    {
        if ($icon = $this->getValue($item, 'icon')) {
            return '<span class="glyphicon glyphicon-' . $icon . '"></span>';
        }
        return '';
    }

    private function getLabel($item)
    {
        if ($label = $this->getValue($item, 'label')) {
            return $label;
        }
        return '';
    }

    private function getValue($item, $key)
    {
        if (isset($item[$key])) {
            return $item[$key];
        }
        return '';
    }

} 