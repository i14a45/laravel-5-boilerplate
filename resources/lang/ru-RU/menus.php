<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Контроль доступа',

            'roles' => [
                'all' => 'Все роли',
                'create' => 'Создать роль',
                'edit' => 'Редактировать роль',
                'management' => 'Управление ролями',
                'main' => 'Роли',
            ],

            'users' => [
                'all' => 'Все пользователи',
                'change-password' => 'Сменить пароль',
                'create' => 'Создать пользователя',
                'deactivated' => 'Отключенные пользователи',
                'deleted' => 'Удаленные пользователи',
                'edit' => 'Редактировать пользователя',
                'main' => 'Пользователи',
            ],
        ],

        'log-viewer' => [
            'main' => 'Просмотр логов',
            'dashboard' => 'Панель управления',
            'logs' => 'Логи',
        ],

        'sidebar' => [
            'dashboard' => 'Панель управления',
            'general' => 'Основное',
        ],
    ],

    'language-picker' => [
        'language' => 'Язык',
        /**
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Арабский',
            'da' => 'Датский',
            'de' => 'Немецкий',
            'en' => 'Английский',
            'es' => 'Испанский',
            'fr' => 'Французский',
            'it' => 'Итальянский',
            'pt-BR' => 'Бразильский португальский',
            'sv' => 'Швецкий',
            'th' => 'Тайский',
        ],
    ],
];
