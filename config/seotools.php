<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => config('app.name'), // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Vitamin In Every Bite', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['Bread, Bread in Lagos, Orange-Fleshed Sweet Potato, Sano Bread, Healthy Bread, Cheap Bread in Lagos, Healthy Bread in Lagos, Cheap Bread, Affordable bread, Fresh Bread, Organic Bread, Fresh Bread in Lagos, Vitamin A, Foods with Vitamin A, Healthy Food, Organic Food'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => 'index,follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => 'C9E40CE04FC37ADEA608C2742EBD138C',
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => '1d9a9a13ff3b7521',
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => 'Vitamin In Every Bite', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'Website',
            'site_name'   => config('app.name'),
            'images'      => [config('app.url').'/assets/images/sanobread.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => config('app.name'), // set false to total remove
            'description' => 'Vitamin In Every Bite', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [config('app.url').'/assets/images/sanobread.png'],
        ],
    ],
];
