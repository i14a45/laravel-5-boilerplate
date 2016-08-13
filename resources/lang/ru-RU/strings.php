<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm' => 'Вы уверены в удалении пользователя из БД? Все связанное с ID пользователя может вызвать ошибку. Вы делаете это на свой страх и риск. Это действие невозможно отменить.',
                'if_confirmed_off' => '(Если подтверждение отключено)',
                'restore_user_confirm' => 'Восстановить пользователя?',
            ],
        ],

        'dashboard' => [
            'title' => 'Панель администратора',
            'welcome' => 'Добро пожаловать',
        ],

        'general' => [
            'all_rights_reserved' => 'Все права защищены.',
            'are_you_sure' => 'Вы уверены?',
            'boilerplate_link' => 'Laravel 5 Boilerplate',
            'continue' => 'Продолжить',
            'member_since' => 'Member since',
            'minutes' => ' мин',
            'search_placeholder' => 'Поиск...',
            'timeout' => 'Ваш сеанс завершен, так как вы были неактивны в течение ',

            'see_all' => [
                'messages' => 'Смотреть все сообщения',
                'notifications' => 'Смотреть все',
                'tasks' => 'Смотреть все задачи',
            ],

            'status' => [
                'online' => 'Онлайн',
                'offline' => 'Офлайн',
            ],

            'you_have' => [
                'messages' => '{0} У вас нет сообщений|{1} У вас 1 сообщение|[2,Inf] У вас :number сообщений(ие)',
                'notifications' => '{0} У вас нет уведомлений|{1} У вас 1 уведомление|[2,Inf] У вас :number уведомлений(ие)',
                'tasks' => '{0} У вас нет задач|{1} У вас 1 задача|[2,Inf] У вас :number задач(а)',
            ],
        ],
    ],

    'emails' => [
        'auth' => [
            'password_reset_subject' => 'Ссылка для восстановления пароля',
            'reset_password' => 'Кликните для сброса пароля',
        ],
    ],

    'frontend' => [
        'email' => [
            'confirm_account' => 'Нажмите сюда для подтверждения:',
        ],

        'test' => 'Тест',

        'tests' => [
            'based_on' => [
                'permission' => 'На основе разрешений - ',
                'role' => 'На основе ролей - ',
            ],

            'js_injected_from_controller' => 'Javascript внедренный из контроллера',

            'using_blade_extensions' => 'Использование расширений Blade',

            'using_access_helper' => [
                'array_permissions' => 'Использование Access Helper с массивом названий разрешений или ID где пользователю должны быть назначены все.',
                'array_permissions_not' => 'Использование Access Helper с массивом названий разрешений или ID где пользователю не должны быть назначены все.',
                'array_roles' => 'Использование Access Helper с массивом названий ролей или ID где пользователю должны быть назначены все.',
                'array_roles_not' => 'Использование Access Helper с массивом названий ролей или ID где пользователю не должны быть назначены все.',
                'permission_id' => 'Использование Access Helper с ID разрешения',
                'permission_name' => 'Использование Access Helper с названием разрешения',
                'role_id' => 'Использование Access Helper с ID роли',
                'role_name' => 'Использование Access Helper с названием роли',
            ],

            'view_console_it_works' => 'В консоли вы увидите \'it works!\' выведенное из FrontendController@index',
            'you_can_see_because' => 'Вы видите это, потому что вам назначена роль \':role\'!',
            'you_can_see_because_permission' => 'Вы видите это, потому что имеете право \':permission\'!',
        ],

        'user' => [
            'profile_updated' => 'Профиль обновлен.',
            'password_updated' => 'Пароль изменен.',
        ],

        'welcome_to' => 'Добро пожаловать в :place',
    ],
];
