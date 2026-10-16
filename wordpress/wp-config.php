<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'Knopka' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin1' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Kara749322' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '],%p[, )6eGRH~Q>jq@f9ld,5qMrI+kH]NxTl?f/<mzo&4&(3vwRBMzq=j^~o*B-' );
define( 'SECURE_AUTH_KEY',  '%ekz!F{.m`#~U-NB++;6a+90(Q&HqSGY*G`;TQfpr>w40iS5%1X`ZTiu0bOJQ}e<' );
define( 'LOGGED_IN_KEY',    '!X{a:[>1)Yy~[j1C8M-AG$%EFOFx0Y&F@aNS 8x:q:=)wE<n~w,od4?KMn4,+}+%' );
define( 'NONCE_KEY',        'm,f35-*%`/oeR7}0knd[ucelKd2bP8,V`Ueqy:vRf^-Z0a^B5&SA?r8F}>k.1u,`' );
define( 'AUTH_SALT',        '};wJfmY@82;I <b_Z/mWmDG|Wl.cS ?QqsHBY$z]|IK!sM!~qI,0Mg$U!Flq2RD9' );
define( 'SECURE_AUTH_SALT', 'ND&-9)bhrcISc|`=?/|vtUs)b~ehTGtAR;Y_<&=byIjp6=U.A|QQF.6+XR/`pw9a' );
define( 'LOGGED_IN_SALT',   '<|[%NJ,}e0t>KaK-_0oq`fIeBfFFG89482;rNH)6OAon|WO`^z{f *Ma7wSEmO:%' );
define( 'NONCE_SALT',       '5vLs$_!3I#f>Wk*!yY4i 7%b,6gUvK]UW|d|pa]s6%TL6&w@:5H:1l4tu*Lx=/5A' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
