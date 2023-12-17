<?php

return function (array $args) {
    $args['variables']['tabFilter'] = [
        'group' => _lang('admin-plus.filter_by.type'),
        'filter' => _lang('admin-plus.filter_by.name'),
        'all' => _lang('global.all'),
        'extend' => _lang('admin.plugins.title.extend'),
        'template' => _lang('admin.plugins.title.template'),
        'language' => _lang('admin.plugins.title.language'),
    ];
};