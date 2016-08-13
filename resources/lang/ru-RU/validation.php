<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Поле :attribute необходимо подтвердить.',
    'active_url'           => 'Поле :attribute не является правильным URL.',
    'after'                => 'Поле :attribute должно быть датой после :date.',
    'alpha'                => 'Поле :attribute может содержать только буквы.',
    'alpha_dash'           => 'Поле :attribute может содержать только буквы, цифры и знаки препинания.',
    'alpha_num'            => 'Поле :attribute может содержать только буквы и цифры.',
    'array'                => 'Поле :attribute должно быть массивом.',
    'before'               => 'Поле :attribute должно быть датой перед :date.',
    'between'              => [
        'numeric' => 'Поле :attribute must be between :min and :max.',
        'file'    => 'Поле :attribute must be between :min and :max kilobytes.',
        'string'  => 'Поле :attribute must be between :min and :max characters.',
        'array'   => 'Поле :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'Поле :attribute должно быть true или false.',
    'confirmed'            => 'Поле :attribute и его подтверждение не совпадают.',
    'date'                 => 'Поле :attribute должно быть корректной датой.',
    'date_format'          => 'Поле :attribute не соответствует формату :format.',
    'different'            => 'Поля :attribute и :other должны отличаться.',
    'digits'               => 'Поле :attribute должно иметь :digits разрядов.',
    'digits_between'       => 'Поле :attribute должно иметь от :min и до :max разрядов.',
    'dimensions'           => 'Поле :attribute имеет неверные размеры изображения.',
    'distinct'             => 'Поле :attribute имеет дубликат значения.',
    'email'                => 'Поле :attribute должно быть корректным e-mail.',
    'exists'               => 'Значение :attribute неверное.',
    'file'                 => 'Поле :attribute должно быть файлом.',
    'filled'               => 'Поле :attribute обязательное.',
    'image'                => 'Поле :attribute должно быть изображением.',
    'in'                   => 'ПЗначение :attribute неверно.',
    'in_array'             => 'Поле :attribute не существет в :other.',
    'integer'              => 'Поле :attribute должно быть целым числом.',
    'ip'                   => 'Поле :attribute должно быть корректным IP адресом.',
    'json'                 => 'Поле :attribute должно быть корректной JSON строкой.',
    'max'                  => [
        'numeric' => 'Поле :attribute не должно быть больше :max.',
        'file'    => 'Размер файла :attribute не должен быть более :max килобайт.',
        'string'  => 'Поле :attribute не должно быть более :max символов(а).',
        'array'   => 'Поле :attribute не может иметь более :max элементов(а).',
    ],
    'mimes'                => 'Поле :attribute должно быть файлом типа: :values.',
    'min'                  => [
        'numeric' => 'Поле :attribute должно быть минимум :min.',
        'file'    => 'Размер файла :attribute должно быть минимум :min килобайт.',
        'string'  => 'Поле :attribute должно быть минимум :min символов(а).',
        'array'   => 'Поле :attribute должно содержать минимум :min элементов(а).',
    ],
    'not_in'               => 'Неверное значение поля :attribute.',
    'numeric'              => 'Поле :attribute должно быть числом.',
    'present'              => 'The :attribute must be present.',
    'regex'                => 'Неверный формат поля :attribute.',
    'required'             => 'Поле :attribute обязательное.',
    'required_if'          => 'Поле :attribute обязательное когда :other равно :value.',
    'required_unless'      => 'Поле :attribute обязательное когда :other в :values.',
    'required_with'        => 'Поле :attribute field is required when :values is present.',
    'required_with_all'    => 'Поле :attribute field is required when :values is present.',
    'required_without'     => 'Поле :attribute field is required when :values is not present.',
    'required_without_all' => 'Поле :attribute field is required when none of :values are present.',
    'same'                 => 'Поля :attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => 'Поле :attribute должно быть :size.',
        'file'    => 'Файл :attribute должен быть :size килобайт.',
        'string'  => 'Поле :attribute должно быть длиной :size символов(а).',
        'array'   => 'Поле :attribute  должно содержать :size элементов(а).',
    ],
    'string'               => 'Поле :attribute must be a string.',
    'timezone'             => 'Поле :attribute должно быть временной зоной.',
    'unique'               => 'Поле :attribute должно быть уникальным.',
    'url'                  => 'Неверный формат поля :attribute.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [

        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Назначенные роли',
                    'dependencies' => 'Зависимости',
                    'display_name' => 'Отображаемое имя',
                    'group' => 'Группа',
                    'group_sort' => 'Групповая сортировка',

                    'groups' => [
                        'name' => 'Название группы',
                    ],

                    'name' => 'Название',
                    'system' => 'Система?',
                ],

                'roles' => [
                    'associated_permissions' => 'Назначенные разрешения',
                    'name' => 'Название',
                    'sort' => 'Сортировка',
                ],

                'users' => [
                    'active' => 'Активный',
                    'associated_roles' => 'Назначенные роли',
                    'confirmed' => 'Подтвержден',
                    'email' => 'E-mail',
                    'name' => 'Имя',
                    'other_permissions' => 'Остальные разрешения',
                    'password' => 'Пароль',
                    'password_confirmation' => 'Подтверждение пароля',
                    'send_confirmation_email' => 'Выслать письмо для подтверждения',
                ],
            ],
        ],

        'frontend' => [
            'email' => 'E-mail',
            'name' => 'Имя',
            'password' => 'Пароль',
            'password_confirmation' => 'Подтверждение пароля',
            'old_password' => 'Текущий пароль',
            'new_password' => 'Новый пароль',
            'new_password_confirmation' => 'Подтверждение нового пароля',
        ],
    ],

];
