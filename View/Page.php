<?php

namespace lightningsdk\slider\View;

use lightningsdk\core\View\CSS;
use lightningsdk\core\View\JS;

class Page {
    public static function init() {
        $scripts = JS::getCompiledScripts(['kenwheeler/slick' => 'slick/slick.min.js']);
        CSS::add('/css/slick.css');
        JS::startup('lightning.js.require(' . json_encode($scripts) . ', function(){})', '$');
    }
}
