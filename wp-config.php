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
define( 'DB_NAME', 'usl' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'AU--_?phNYP>GnwYDJ%YN{d.BL7CkKcI@AMM+I<*]RgA_`vt4W1><CNS41/SYmF#' );
define( 'SECURE_AUTH_KEY',  '*%Xv|KT;^$]}!H:n51A?pO@QoO<M@b3{gOWy~A8DYX3,tLSgdX56.6_<BDWNw,_N' );
define( 'LOGGED_IN_KEY',    'cFgxXv_p}3Cg#:AqPvTsur=PgKak_SsO~8Yo<-os|lAj2r(Csym-{!Tp=z##zDvo' );
define( 'NONCE_KEY',        'PJV+yH}+ZQ4@?S$1_H`BhN%nQpu*?Brb1iD5hL$/w_V:vpHYk7eR{}BJJzQ0ys%>' );
define( 'AUTH_SALT',        'ibY$Rk*xF U#_3um#{!Et*^Oe6wpu8FHD4(.zzqM%5pd?/xo6NpF$qo(WyeZI7.)' );
define( 'SECURE_AUTH_SALT', 'r~iaT[s|u*0E&%,6`aKvO>Na7R+#iL  e-T5f*CMr_z#:E#t{pabE.0n[>a%|eq0' );
define( 'LOGGED_IN_SALT',   'pMUUfwA,WgoR+UQws`ruF8vrrQ{o^M2}b!jU. 7b=?Ty>v,mZ1!4=QvRx~SDiH=.' );
define( 'NONCE_SALT',       'gU|*y*$>U91}wML,r[qRWbZW_!PHn-)7UN.<}BD3j.}J:niB<Rv4iLphqSm6.P6[' );

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
