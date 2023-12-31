<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'GADCH|DH|Oficial',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => true,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>GADCH|DH|Oficial</b>',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => true,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-gradient-dark',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'bg-gradient-dark',
    'classes_auth_header' => '',
    'classes_auth_body' => 'bg-gradient-dark',
    'classes_auth_footer' => 'text-center',
    'classes_auth_icon' => 'fa-fw text-light',
    'classes_auth_btn' => 'btn-flat btn-light',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => false,
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'forgot-password',
    'password_email_url' => false,
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'darkmode-widget',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],
        [
            'text' => 'Dashboard',
            'url'  => 'dashboard',
            'icon' => 'fas fa-fw fa-tachometer-alt',
        ],
        ['header' => 'Account Settings'],
        [
            'text' => 'Profile',
            'url'  => 'user/profile',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'Change Password',
            'url'  => '#',
            'icon' => 'fas fa-fw fa-lock',
        ],
        ['header' => 'Work'],
        [
            'text' => 'Folders',
            'icon' => 'fas fa-fw fa-folder-open',
            'submenu' => [
                [
                    'text' => 'A.H.C.8D.Orient.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'crhcrtcrhych8drntl',
                ],
                [
                    'text' => 'Ctrs.Cons.Geof.Pet.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'cntrtcncnsltgrsgfscptrlr',
                ],
                [
                    'text' => 'Ctrs.Cons.Prod.L.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'cntrtcnscnsltrsprdcccln',
                ],
                [
                    'text' => 'Conv.Vrs.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'cnvnvrs',
                ],
                [
                    'text' => 'DH.Doc.Cmpo.Mga.Huac.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'dhdcmntcncmpmrgrthcy',
                ],
                [
                    'text' => 'DH.EAFD.Cmpo.Mga.Huac.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'dheafdcmpmrgrthcy',
                ],
                [
                    'text' => 'Dir.YPFB.Nts.Inf.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'dctrypfbntsnfrms',
                ],
                [
                    'text' => 'Doc.Pres.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'dcmntcnprsntcns',
                ],
                [
                    'text' => 'Docs.Resp.Mga.Huac.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'dcmntsrspldmrgrthcy',
                ],
                [
                    'text' => 'Emit.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'mtds',
                ],
                [
                    'text' => 'Edo.Cts.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'stdcnts',
                ],
                [
                    'text' => 'Gdo.Pte.Cgo.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'gsdctpntcmrg',
                ],
                [
                    'text' => 'IDH.IEHD.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'idhiehd',
                ],
                [
                    'text' => 'Inf.Cmpo.Prods.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'nfrmcmpsprdctrs',
                ],
                [
                    'text' => 'Ley.Sec.Hidro.Ener.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'lyssctrhdrcrbrfrrg',
                ],
                [
                    'text' => 'Pract.Ind.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'prctcsndstrls',
                ],
                [
                    'text' => 'Rec.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'rcbsd',
                ],
                [
                    'text' => 'Rec.Ext.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'rcbdsxtrns',
                ],
                [
                    'text' => 'Rec.Int.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'rcbdsntrns',
                ],
                [
                    'text' => 'Reg.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'rgls',
                ],
                [
                    'text' => 'Rpts.Prod.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'rprtsprdccn',
                ],
                [
                    'text' => 'Res.Min.Cmpo.Mga.Huac.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'rslcnmnstrlcmpsmrgrthcy',
                ],
                [
                    'text' => 'Retro.Reg.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'rtrctvrgls',
                ],
                [
                    'text' => '1ro.2do.Crpo.Cmpo.I.A.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'tcepboe1ro2docrpcmpnchsq',
                ],
                [
                    'text' => '3ro.4to.Crpo.Cmpo.I.A.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'tcepboe3ro4tocrpcmpnchsq',
                ],
                [
                    'text' => '5to.6to.Crpo.Cmpo.I.A.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'tcepboe5to6tocrpcmpnchsq',
                ],
                [
                    'text' => '7mo.8vo.Crpo.Cmpo.I.A.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'tcepboe7mo8vocrpcmpnchsq',
                ],
                [
                    'text' => '9no.10mo.Crpo.Cmpo.I.A.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'tcepboe9no10mocrpcmpnchsq',
                ],
                [
                    'text' => 'Vrs.',
                    'icon' => 'fas fa-fw fa-paste',
                    'url' => 'vrs',
                ],
            ],
        ],
        ['header' => 'Utilities'],
        [
            'text' => 'Charts',
            'icon' => 'fas fa-fw fa-chart-pie',
            'submenu' => [
                [
                    'text' => 'ChartJS',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'chartjs',
                ],
                [
                    'text' => 'Flot',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'flot',
                ],
                [
                    'text' => 'Inline',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'inline',
                ],
                [
                    'text' => 'uPlot',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'uplot',
                ],
            ],
        ],
        [
            'text' => 'Calendar',
            'url' => 'calendar',
            'icon' => 'fas fa-fw fa-calendar-alt',
            'label' => 'New',
            'label_color' => 'success',
        ],
        [
            'text' => 'Mailbox',
            'icon' => 'fas fa-fw fa-envelope',
            'submenu' => [
                [
                    'text' => 'Inbox',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'mailbox',
                ],
                [
                    'text' => 'Compose',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'compose',
                ],
                [
                    'text' => 'Read',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'read-mail',
                ],
            ],
        ],
        [
            'text' => 'Pages',
            'icon' => 'fas fa-fw fa-book',
            'submenu' => [
                [
                    'text' => 'Invoice',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'invoice',
                ],
                [
                    'text' => 'Contacts',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'contacts',
                ],
                [
                    'text' => 'FAQ',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'faq',
                ],
                [
                    'text' => 'Contact Us',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'contact-us',
                ],
            ],
        ],
        [
            'text' => 'Search',
            'icon' => 'fas fa-fw fa-search',
            'submenu' => [
                [
                    'text' => 'Simple Search',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'simple',
                ],
                [
                    'text' => 'Enhanced',
                    'icon' => 'far fa-fw fa-circle',
                    'url' => 'enhanced',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'DatatablesPlugins' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/dataTables.buttons.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.bootstrap4.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.html5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.print.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/jszip/jszip.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/pdfmake/pdfmake.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/pdfmake/vfs_fonts.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/css/buttons.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@11',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
        'TempusDominusBs4' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/moment/moment.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
                ],
            ],
        ],
        'BsCustomFileInput' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/bs-custom-file-input/bs-custom-file-input.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
