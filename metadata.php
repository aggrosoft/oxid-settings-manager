<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'           => 'agsettingsmanager',
    'title'        => 'Aggrosoft Settings Manager',
    'description'  => [
        'de' => 'Erlaubt Anlage beliebiger eigener Shop Einstellungen',
        'en' => 'Add custom settings to shop installation'
    ],
    'thumbnail'    => '',
    'version'      => '0.0.0',
    'author'       => 'Aggrosoft GmbH',
    'extend'      => [
        \OxidEsales\Eshop\Core\ViewConfig::class => \Aggrosoft\SettingsManager\Application\Core\ViewConfig::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ShopConfig::class => \Aggrosoft\SettingsManager\Application\Controller\Admin\ShopConfig::class
    ],
    'settings' => [
        ['group' => 'agsettingsmanager_main', 'name' => 'aAdditionalConfBools','type' => 'aarr',   'value' => ''],
        ['group' => 'agsettingsmanager_main', 'name' => 'aAdditionalConfStrs','type' => 'aarr',   'value' => ''],
        ['group' => 'agsettingsmanager_main', 'name' => 'aAdditionalConfArrs','type' => 'aarr',   'value' => ''],
        ['group' => 'agsettingsmanager_main', 'name' => 'aAdditionalConfAArrs','type' => 'aarr',   'value' => '']
    ],
    'blocks' => [
        [
            'template' => 'shop_config.tpl',
            'block' => 'admin_shop_config_options',
            'file' => '/views/blocks/admin_shop_config_options.tpl',
        ]
    ]
);
