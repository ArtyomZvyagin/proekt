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
define( 'DB_NAME', 'db-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'U>g*|Rc#%w$TDBP*w-=:2+Rh?&7sQzZ7b.ORTRHAQI`hopG>Z&;TmkSC%,P<|kaO' );
define( 'SECURE_AUTH_KEY',  'CeHX?.Bx33^w.QDS/y/[Zg6hoo|zzMO6a)OC7p0tlx0U.~uHD+D5oX3N_/ge=<0F' );
define( 'LOGGED_IN_KEY',    ':^8ywz1U.<mTR42FW+?nkE+DWglcOm+/f)/Uo8 9/7e3]5*>3X6p,}XXDk$GfJVs' );
define( 'NONCE_KEY',        '@N&b0oy0U#W9Xs-c+WuCg@LW rV)OlE<C>(lmOf`cMd7lzMe1acWJ955KD/:-x_.' );
define( 'AUTH_SALT',        'YO#&}|rQv(NL6QPjnywS5PsK0M]@D@:++B<]4cM{Xn:3tjC5l7l5;r_5ev[kCR@-' );
define( 'SECURE_AUTH_SALT', 'Y/c}t %O_d=XF_Jf1u^A,RD/!E!43q*>?1fH4L}bdqah2vg*N Nd8p`U>[e!4x:o' );
define( 'LOGGED_IN_SALT',   'o6^/R&z2ccSyUOdES&dxtTn5l%E+2_0e`2HA{q>b&w5Hxf69;I45*rp/d,g?Qk/}' );
define( 'NONCE_SALT',       'o~Pop*A$<R)%R1<W[*iDB+QSXbpWr:[/#;s.wXtS(5EQn7TBsA,W,nb=i?Uf]Uq9' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
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
