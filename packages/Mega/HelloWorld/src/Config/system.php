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
    ]
];