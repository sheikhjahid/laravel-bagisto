<?php

return [
    [
        'key' => 'dashboard',
        'name' => 'admin::app.acl.dashboard',
        'route' => 'admin.dashboard.index',
        'sort' => 1
    ], [
        'key' => 'sales',
        'name' => 'admin::app.acl.sales',
        'route' => 'admin.sales.orders.index',
        'sort' => 2
    ], [
        'key' => 'sales.orders',
        'name' => 'admin::app.acl.orders',
        'route' => 'admin.sales.orders.index',
        'sort' => 1
    ], [
        'key' => 'sales.invoices',
        'name' => 'admin::app.acl.invoices',
        'route' => 'admin.sales.invoices.index',
        'sort' => 2
    ], [
        'key' => 'sales.shipments',
        'name' => 'admin::app.acl.shipments',
        'route' => 'admin.sales.shipments.index',
        'sort' => 3
    ], [
        'key' => 'catalog',
        'name' => 'admin::app.acl.catalog',
        'route' => 'admin.catalog.index',
        'sort' => 3
    ], [
        'key' => 'catalog.products',
        'name' => 'admin::app.acl.products',
        'route' => 'admin.catalog.products.index',
        'sort' => 1
    ]
];