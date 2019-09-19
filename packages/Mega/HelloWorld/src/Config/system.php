<?php

return [
    [
        'key' => 'ShowPriceAfterLogin',
        'name' => 'ShowPriceAfterLogin::app.showpriceafterlogin.name',
        'sort' => 5
    ], [
        'key' => 'ShowPriceAfterLogin.settings',
        'name' => 'ShowPriceAfterLogin::app.showpriceafterlogin.settings',
        'sort' => 1,
    ], [
        'key' => 'ShowPriceAfterLogin.settings.settings',
        'name' => 'ShowPriceAfterLogin::app.showpriceafterlogin.settings',
        'sort' => 1,
        'fields' => [
            [
                'name' => 'enableordisable',
                'title' => 'ShowPriceAfterLogin::app.showpriceafterlogin.toggle',
                'type' => 'boolean',
                'channel_based' => true,
                'locale_based' => false
            ]
        ]
        ],
        [ 'key' => 'sales.carriers.Fedex',
          'name' => 'admin::app.admin.system.fedex-shipping',
          'sort' => 2,
          'fields' => [ [ 'name' => 'title', 'title' => 'admin::app.admin.system.title', 'type' => 'text', 'validation' => 'required', 'channel_based' => true, 'locale_based' => true ],
                        [ 'name' => 'description', 'title' => 'admin::app.admin.system.description', 'type' => 'textarea', 'channel_based' => true, 'locale_based' => false ],
                        [ 'name' => 'default_rate', 'title' => 'admin::app.admin.system.rate', 'type' => 'text', 'channel_based' => true, 'locale_based' => false ], //you can add custom fields as on example to get the minimum subtotal to calculate the standard rate . [ ‘name’ => ‘base_amount’, ‘title’ => ‘admin::app.admin.system.minimum-amount’, ‘type’ => ‘text’, ‘channel_based’ => true, ‘locale_based’ => false ] , [ ‘name’ => ‘active’, ‘title’ => ‘admin::app.admin.system.status’, ‘type’ => ‘select’, ‘options’ => [ [ ‘title’ => ‘Activo’, ‘value’ => true ], [ ‘title’ => ‘Inactivo’, ‘value’ => false ] ], ‘validation’ => ‘required’, ‘channel_based’ => false, ‘locale_based’ => true ] ] ]  
        , //you can add custom fields as on example to get the minimum subtotal to calculate the standard rate . [ ‘name’ => ‘base_amount’, ‘title’ => ‘admin::app.admin.system.minimum-amount’, ‘type’ => ‘text’, ‘channel_based’ => true, ‘locale_based’ => false ] , [ ‘name’ => ‘active’, ‘title’ => ‘admin::app.admin.system.status’, ‘type’ => ‘select’, ‘options’ => [ [ ‘title’ => ‘Activo’, ‘value’ => true ], [ ‘title’ => ‘Inactivo’, ‘value’ => false ] ], ‘validation’ => ‘required’, ‘channel_based’ => false, ‘locale_based’ => true ] ] ]
];