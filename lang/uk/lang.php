<?php return [
    'plugin'     => [
        'name'        => 'Панель інструментів',
        'description' => 'Toolbox - це набір хелперів для прискорення розробки на платформі October CMS',
    ],
    'field'      => [
        'id'                       => 'ID',
        'name'                     => 'Ім’я',
        'title'                    => 'Назва',
        'active'                   => 'Активний',
        'hidden'                   => 'Прихований',
        'code'                     => 'Код',
        'slug'                     => 'URL-адреса',
        'external_id'              => 'Зовнішній ID',
        'preview_text'             => '
Короткий опис',
        'preview_image'            => 'Зображення-превью',
        'image'                    => 'Зображення',
        'images'                   => 'Ґалерея зображень',
        'description'              => 'Опис',
        'category'                 => 'Категорія',
        'email'                    => 'Електронна пошта',
        'phone'                    => 'Телефон',
        'moderation'               => 'Модерація',
        'mode'                     => 'Режим роботи',
        'status'                   => 'Статус',
        'city'                     => 'Місто',
        'address'                  => 'Адреса',
        'street'                   => 'Вулиця',
        'lat'                      => '
широта (lat)',
        'lng'                      => 'довгота (lng)',
        'type'                     => 'Тип',
        'avatar'                   => 'Аватар',
        'property'                 => 'Властивість',
        'property_list_value'      => '
Допустимі значення властивості',
        'property_mode'            => 'Вид властивості',
        'property_tab'             => 'Ім\'я вкладки',
        'property_is_translatable' => '
Властивість доступна для перекладу',
        'key'                      => 'Ключ',
        'value'                    => 'Значення',
        'label'                    => 'Мітка',
        'date'                     => 'Дата',
        'datetime'                 => 'Дата і час',
        'time'                     => 'Час',
        'file'                     => 'Файл',
        'decimals'                 => 'Кількість знаків після коми',
        'dec_point'                => 'Роздільник дробової частини',
        'thousands_sep'            => 'Роздільник тисяч',
        'dot'                      => 'Крапка',
        'comma'                    => 'Кома',
        'together'                 => 'Об\'єднати',
        'space'                    => 'Space',
        'date_begin'               => 'Дата початку дії',
        'date_end'                 => 'Дата закінчення дії',
        'discount_value'           => 'Розмір знижки',
        'discount_type'            => 'Тип знижки',
        'discount_price'           => 'Ціни зі знижкою',
        'discount'                 => 'Знижка',
        'product'                  => 'Товар',
        'priority'                 => 'Пріоритет',
        'group'                    => 'Група',
        'count'                    => 'Кількість',
        'length'                   => 'Довжина',
        'amount'                   => 'Сума',
        'author'                   => 'Автор',
        'link'                     => 'Посилання',
        'view_count'               => 'Кількість переглядів',
        'is_default'               => 'Стандартне значення',
        'symbol'                   => 'Символ',
        'field'                    => 'Поля',

        'sort_order' => 'Сортування',
        'created_at' => 'Створено',
        'updated_at' => 'Оновлено ',
        'deleted_at' => 'Видалено',
        'deleted'    => 'Видалено',
        'empty'      => 'Не обрано',
        'password'   => 'Пароль',

        'site_settings'                 => 'Налаштування додатку',
        'site_settings_description'     => 'Загальні налаштування додатку',
        'queue_on'                      => 'Відправка листів з використанням Queue',
        'queue_name'                    => 'Назва Queue при обробці імпорту',
        'import_queue_on'               => 'Застосувати Queue при обробці імпорту
',
        'import_queue_name'             => 'Назва Queue при обробці імпорту',
        'email_list_description'        => 'Заповніть список email адрес, розділених комами',
        'import_deactivate'             => 'Деактивувати вибране',
        'import_deactivate_description' => '
Всі елементи, яких немає в CSV файлі, будуть деактивовані',

        'country'  => 'Країна',
        'state'    => 'Штат (Область)',
        'house'    => 'Номер будинку',
        'flat'     => 'Номер квартири',
        'address1' => 'Адреса 1',
        'address2' => 'Адреса 2',
        'postcode' => 'Поштовий індекс',

        'import_file_list'             => 'Імпортувати файли',
        'import_from_file'             => 'Імпортувати з файлу',
        'import_file_path'             => 'Відносний шлях від папки зберігання до файлу',
        'import_image_folder'          => 'Відносний шлях від папки зберігання до папки зображень',
        'import_path_to_list'          => 'Шлях до вузла зі списком елементів',
        'import_path_to_list_example'  => 'main/elements/element',
        'import_field_list'            => 'Список полів',
        'import_path_to_field'         => 'Path to field node',
        'import_path_to_field_example' => 'fields/field[@code="active"]
',
    ],
    'tab'        => [
        'preview_content' => 'Попередній перегляд контенту',
        'full_content'    => 'Контент',
        'images'          => 'Зображення',
        'files'           => 'Файли',
        'settings'        => 'Налаштування',
        'description'     => 'Опис',
        'properties'      => 'Властивості',
        'mail'            => 'Надіслати електронного листа',
        'import'          => 'Імпорт',
        'permissions'     => 'Налаштування сайту ',
        'prices_format'   => 'Формат ціни',
    ],
    'component'  => [
        'property_name_error_404' => 'Відображати 404 сторінку',
        'property_slug'           => 'Адре́са ресу́рсу (URL)',
        'property_slug_required'  => 'Адре́са ресу́рсу обов\'язкова (URL)',
        'property_url_check'      => 'Розумна перевірка URL',
        'pagination'              => 'Пагінація',
        'pagination_desc'         => 'Відображення кнопок пагінації',

        'property_redirect_page'         => 'Сторінка перенаправлення',
        'property_redirect_success_page' => 'Сторінка перенаправлення після успішного виконання',
        'property_redirect_fail_page'    => 'Сторінка перенаправлення після не успішного виконання',
        'property_redirect_on'           => 'Перенаправлення вкл.',
        'property_flash_on'              => 'Повідомлення вкл.',
        'property_mode'                  => 'Режим роботи',
        'mode_submit'                    => 'Відправлення форми',
        'mode_ajax'                      => 'Ajax',
    ],
    'message'    => [
        'create_success'                  => 'Створення:name was виконано',
        'update_success'                  => 'Оновлення:name was виконано',
        'delete_success'                  => 'Видалення:name was виконано',
        'restore_confirm'                 => 'Видалити виділені елементи?',
        'restore_success'                 => 'Відновлення елементів виконано',
        'e_not_correct_request'           => 'Некоректний запит',
        'row_is_empty'                    => 'Пусте значення
',
        'external_id_is_empty'            => 'Пусте значення зовнішнього ID',
        'import_additional_info'          => 'Додаткова інформація про імпорт',
        'import_active_field_info'        => '
Значення поля "active" буде встановлено на "true", якщо його немає у файлі CSV.',
        'import_preview_image_field_info' => 'Шлях до файлу попереднього перегляду повинен бути встановлений щодо каталогу зберігання вашого проекту. Наприклад: "app / media / image.jpg".',
        'import_images_field_info'        => '
Шлях до файлу зображення повинен бути встановлений відносно каталогу зберігання вашого проекту. Наприклад: "app / media / image.jpg". Шляхи до файлів зображень повинні бути розділені комами.',
        'import_from_xml_confirm'         => 'Почати імпорт з XML-файла?',
        'import_from_xml_report'          => 'Результати імпорту: created - :created, updated - :updated, skipped - :skipped, processed - :processed.',

        'table_toolbox_helper' => 'Відображати команду',
        'table_toolbox_create' => 'Створити :description',

        'choice_field_list'   => 'Вибір доступних полів (Наприклад: 1,2,3,4)',
        'choice_sorting'      => 'Вибір сортування',
        'choice_lang_list'    => 'Вибрати lang',
        'choice_extend_model' => 'Вибрати extend model',
        'set'                 => 'Встановити :name (Example: :example)',
        'create'              => 'Створити :name?',
        'force_file'          => '
Файл: "файл вже існує". Створити примусово?',
        'add_side_menu'       => 'Додати бокове меню (side menu) в plugin.yaml?',
        'version_up'          => 'Додати нову версію до version.yaml?',
    ],
    'settings'   => [
        'count_per_page'                => 'Кількість елементів на сторінці',
        'available_count_per_page'      => '
Список доступних значень для "count_per_page"',
        'available_count_per_page_desc' => '
Встановити дозволені значення, розділені комами.',
        'number_validation'             => 'Необхідно ввести число',
        'pagination_limit'              => 'Максимальна кількість кнопок пагінації',
        'active_class'                  => 'Клас активної кнопки',
        'button_list'                   => 'Список кнопок',
        'button_list_description'       => 'main,first,first-more,prev,prev-more,next,next-more,last,last-more',
        'button_name'                   => 'Назва кнопки',
        'button_limit'                  => ' 
Показати кнопку за сторінкою',
        'button_number'                 => 'Відобразити ім\'я кнопки як число',
        'button_class'                  => 'Клас CSS',
        'last_button'                   => '"Остання"',
        'last-more_button'              => '"Далі" (перед "Остання")',
        'next_button'                   => '"Наступна"',
        'next-more_button'              => '"Далі" (перед "Наступна")',
        'prev_button'                   => '"Попередня"',
        'prev-more_button'              => '"Далі" (після "Попередня")
',
        'first_button'                  => '"Перша"',
        'first-more_button'             => '"Далі" (після "Перша")',
        'main_button'                   => '"Основна"',
        'slug_is_translatable'          => 'URL підтримує багатомовність',
    ],
    'button'     => [
        'add_property_value' => 'Додати значення властивості',
        'import_from_csv'    => 'Імпорт з CSV',
        'export_in_csv'      => 'Експорт з CSV',
        'import_button'      => 'Імпорт записів',
        'import_from_xml'    => 'Імпорт з XML',
    ],
    'type'       => [
        'input'            => 'Текстове поле (input)',
        'number'           => 'Числове поле (number)',
        'textarea'         => 'Текстове поле (textarea)',
        'rich_editor'      => 'Текстове поле (wysiwyg)',
        'single_checkbox'  => 'Чекбокс',
        'switch'           => 'Вимикач',
        'checkbox'         => 'Список чекбоксів (checkbox)
',
        'balloon_selector' => 'Вибір зі списку (balloon selector)',
        'tag_list'         => 'Множинний вибір зі списку (tag list)',
        'select'           => 'Обрати',
        'radio'            => 'Вибір зі списку (radio button)',
        'date'             => 'Поле вибору дати і часу (datetime)',
        'colorpicker'      => 'Поле вибору кольору (colorpicker)',
        'mediafinder'      => 'Файл',
    ],
    'permission' => [
        'settings' => 'Управління налаштуваннями',
    ],
];
