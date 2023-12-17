<?php

return function (array $args) {
    $args['output'] .= "\n/* Admin Plus Plugin */\n";

    // admin layout
    $args['output'] .= "ul.submenu {width: 100%; background: " . $GLOBALS['scheme_white'] . "; border-bottom: 1px solid " . $GLOBALS['scheme_bar'] . "; padding: 0 0 0 22px; display: inline-block;}\n";
    $args['output'] .= "ul.submenu > li {display: inline-block; padding: 7px 10px;}\n";

    // editscript buttonbox
    $args['output'] .= ".module-content-editgallery>form>p>a.button {display: none;}\n";
    $args['output'] .= "button.block.bigger {margin: 6px;}\n";
    $args['output'] .= "button.savebtn.block.bigger {text-align: left; float: left;}\n";
    $args['output'] .= "a.prevbtn.bigger {margin: 6px; float: right;}\n";
    $args['output'] .= "button.block img.icon {float: none; margin: 0; padding: 0 10px 0 0;}\n";

    // service buttons (save and open)
    $args['output'] .= "#service-container {display: flex; justify-content: space-around; width: 100%; border-bottom: 1px solid " . $GLOBALS['scheme_smoke'] . ";}";
    $args['output'] .= "#service-container .button {flex-grow: 1; text-wrap: nowrap;}";

    // plugin filter
    $args['output'] .= "input#plugin-filter {margin: 0 3px 0 0;}";

    // settings highlight
    $args['output'] .= "fieldset:target {border: 1px solid " . $GLOBALS['scheme_bar'] . ";}";
    $args['output'] .= "\n/* /Admin Plus Plugin */\n";
};
