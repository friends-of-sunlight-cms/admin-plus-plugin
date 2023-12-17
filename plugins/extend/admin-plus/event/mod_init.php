<?php

return function (array $args) {
    if ($args['name'] !== 'plugins') {
        return;
    }
    $this->enableEventGroup('admin-plus');
};
