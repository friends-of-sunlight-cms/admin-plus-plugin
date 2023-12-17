<?php

namespace SunlightExtend\AdminPlus;

use Sunlight\Plugin\Action\ConfigAction as BaseConfigAction;

class ConfigAction extends BaseConfigAction
{
    public function getConfigLabel(string $key): string
    {
        return _lang('admin-plus.config.' . $key);
    }
}
