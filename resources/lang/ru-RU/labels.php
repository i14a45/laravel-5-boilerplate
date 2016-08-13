<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'Все',
        'yes' => 'Да',
        'no' => 'Нет',
        'custom' => 'Custom',
        'actions' => 'Действия',
        'buttons' => [
            'save' => 'Сохранить',
            'update' => 'Обновить',
        ],
        'hide' => 'Скрыть',
        'none' => 'Ничего',
        'show' => 'Показать',
        'toggle_navigation' => 'Переключить',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Создать роль',
                'edit' => 'Редактировать роль',
                'management' => 'Управление ролями',

                'table' => [
                    'number_of_users' => 'Кол-во пользователей',
                    'permissions' => 'Права',
                    'role' => 'Роль',
                    'sort' => 'Сортировка',
                    'total' => 'всего ролей',
                ],
            ],

            'users' => [
                'active' => 'Активированные пользователи',
                'all_permissions' => 'Все разрешения',
                'change_password' => 'Сменить пароль',
                'change_password_for' => 'Сменить пароль для :user',
                'create' => 'Создать пользователя',
                'deactivated' => 'Отключенные пользователи',
                'deleted' => 'Удаленные пользователи',
                'edit' => 'Редактировать пользователя',
                'management' => 'Управление пользователями',
                'no_permissions' => 'Нет разрешений',
                'no_roles' => 'Нет ролей для назначения.',
                'permissions' => 'Разрешения',

                'table' => [
                    'confirmed' => 'Подтвержден',
                    'created' => 'Создан',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Последнее изменение',
                    'name' => 'Имя',
                    'no_deactivated' => 'Отключенных пользователей нет',
                    'no_deleted' => 'Удаленных пользователей нет',
                    'roles' => 'Роли',
                    'total' => 'всего пользователей',
                ],
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title' => 'Авторизация',
            'login_button' => 'Вход',
            'login_with' => 'Войти через :social_media',
            'register_box_title' => 'Регистрация',
            'register_button' => 'Зарегистрироваться',
            'remember_me' => 'Запомнить',
        ],

        'passwords' => [
            'forgot_password' => 'Забыли пароль?',
            'reset_password_box_title' => 'Восстановление пароля',
            'reset_password_button' => 'Восстановить пароль',
            'send_password_reset_link_button' => 'Выслать ссылку для восстановление пароля',
        ],

        'macros' => [
            'country' => [
                'alpha' => 'Country Alpha Codes',
                'alpha2' => 'Country Alpha 2 Codes',
                'alpha3' => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us' => [
                    'us' => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed' => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],

            'timezone' => 'Timezone',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Сменить пароль',
            ],

            'profile' => [
                'avatar' => 'Аватар',
                'created_at' => 'Создан',
                'edit_information' => 'Редактировать данные',
                'email' => 'E-mail',
                'last_updated' => 'Последнее изменение',
                'name' => 'Имя',
                'update_information' => 'Обновить данные',
            ],
        ],

    ],
];
