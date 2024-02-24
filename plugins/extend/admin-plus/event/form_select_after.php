<?php

use Sunlight\Router;
use Sunlight\Template;
use Sunlight\User;
use Sunlight\Xsrf;

return function (array $args) {
    global $_admin;

    if ($_admin->currentModule !== 'settings') {
        return;
    }

    if (!User::hasPrivilege('adminplugins')) {
        return;
    }

    if ($args['name'] !== 'default_template') {
        return;
    }

    $currentTemplate = Template::getCurrent();
    $configAction = $currentTemplate->getAction('config');

    // add a button for configuration if the template supports it
    if ($configAction->isAllowed()) {
        $configUrl = Xsrf::addToUrl(Router::admin('plugins-action', ['query' => ['id' => $currentTemplate->getId(), 'action' => 'config']]));
        $args['output'] .= ' <a class="button" href="' . _e($configUrl) . '" title="' . _e($configAction->getTitle() . ': ' . $currentTemplate->getOption('name')) . "\">⚙️</a>\n";
    }
};