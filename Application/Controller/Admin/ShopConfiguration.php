<?php

namespace Aggrosoft\SettingsManager\Application\Controller\Admin;

class ShopConfiguration extends ShopConfiguration_parent
{
    public function render()
    {
        $template = parent::render();
        $config = \OxidEsales\Eshop\Core\Registry::getConfig();
        $this->_aViewData['aAdditionalConfBools'] = $config->getShopConfVar('aAdditionalConfBools', null, 'module:agsettingsmanager');
        $this->_aViewData['aAdditionalConfStrs'] = $config->getShopConfVar('aAdditionalConfStrs', null, 'module:agsettingsmanager');
        $this->_aViewData['aAdditionalConfArrs'] = $config->getShopConfVar('aAdditionalConfArrs', null, 'module:agsettingsmanager');
        $this->_aViewData['aAdditionalConfAArrs'] = $config->getShopConfVar('aAdditionalConfAArrs', null, 'module:agsettingsmanager');
        return $template;
    }
}