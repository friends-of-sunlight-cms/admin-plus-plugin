<?php

use Sunlight\Admin\Admin;
use Sunlight\Admin\AdminState;
use Sunlight\Extend;
use Sunlight\Router;
use Sunlight\Settings;

return function (array $args) {

    /**  @var $_admin AdminState */
    global $_admin;

    $args['replace'] = true;
    $args['output'] = _buffer(function () use ($_admin) { ?>
        <div id="container">

            <div id="top">
                <div class="wrapper">
                    <div id="header">
                        <?= Admin::userMenu($_admin->dark) ?>
                        <div id="title">
                            <?= Settings::get('title'), ' - ', _lang('global.admintitle') ?>
                        </div>
                    </div>

                    <hr class="hidden">

                    <?= Admin::menu() ?>

                </div>
                <?php
                $submenuItems = [];
                Extend::call('admin-plus.submenu', ['module' => $_admin->currentModule, 'items' => &$submenuItems]);
                ?>
                <?php if (!empty($submenuItems)): ?>
                    <ul class="submenu">
                        <?php foreach ($submenuItems as $item): ?>
                            <li><a href="<?= _e($item['url']) ?>"><?= _e($item['title']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <div id="page" class="wrapper">
                <div id="content" class="module-<?= _e($_admin->currentModule) ?>">
                    <?= $_admin->output ?>

                    <div class="cleaner"></div>
                </div>

                <hr class="hidden">
                <div id="footer">
                    <div id="footer-links">
                        <?php if ($_admin->access): ?>
                            <a href="<?= _e(Router::index()) ?>" target="_blank"><?= _lang('admin.link.site') ?></a>
                            <a href="<?= _e(Router::adminIndex()) ?>"
                               target="_blank"><?= _lang('admin.link.newwin') ?></a>
                        <?php else: ?>
                            <a href="<?= _e(Router::index()) ?>">&lt; <?= _lang('admin.link.home') ?></a>
                        <?php endif ?>
                    </div>

                    <div id="footer-powered-by">
                        <?= _lang('system.poweredby') ?> <a href="https://sunlight-cms.cz/" target="_blank">SunLight CMS</a>
                    </div>
                </div>
            </div>

        </div>
    <?php });
};