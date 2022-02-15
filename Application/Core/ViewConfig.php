<?php

namespace Aggrosoft\SettingsManager\Core;

class ViewConfig extends ViewConfig_parent
{
    public function getConfigSetting ($variable, $module = '') {
        $config = \OxidEsales\Eshop\Core\Registry::getConfig();
        return $config->getShopConfVar($variable, null, $module);
    }
}