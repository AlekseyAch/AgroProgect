<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
define( 'DB_NAME', "agro" );

/** Имя пользователя базы данных */
define( 'DB_USER', "root" );

/** Пароль к базе данных */
define( 'DB_PASSWORD', "" );

/** Имя сервера базы данных */
define( 'DB_HOST', "localhost" );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );
define ('WPCF7_LOAD_JS', true);
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
define( 'AUTH_KEY',         'rywjzl0V#+:0{>$k3]aNmu fPbI4!L=kf&_Tpc&44H_b7Rf mYf~0](HcEH9)mWM' );
define( 'SECURE_AUTH_KEY',  'G1cSv%)GJb&&k9*8pHe3}M]&s#s*^aUmDm*0WbuHJ*K@w[vWYLlk/X*,_P$0Y,f)' );
define( 'LOGGED_IN_KEY',    ' yq|mS1)Dy}!Z{Gj^,EhNpU^tk8m6O[J89Ln2_>gJGAIK55EuyIe4/z,h?X:lB /' );
define( 'NONCE_KEY',        '|}ogG9A 7#!sy[_nObO,y;SNbIch5Dl1:bK0Z3k*?)j%V]!Wl4z<!HYd:(bvS8|g' );
define( 'AUTH_SALT',        '#O ]w+(C@8hVW2|:.T9Zyr#PXxnx+RU:}A1`%KKYuTwAf3^xuUHXuK~vkY))[3-?' );
define( 'SECURE_AUTH_SALT', ',_G[F@dW?1yfGw^;-XTBp02w>n|E)rsBfXn*T],KFr~ /UB6X|D97I_cuJY1c=n0' );
define( 'LOGGED_IN_SALT',   'B_:(A QnQ=F6*0$/<h}Sj*XD-<7^b~X4t2de5k]#8ip<|Aoj*skO~`uk#=`9H]Y{' );
define( 'NONCE_SALT',       'X@h1NqmHD*sDxIXaEQd3zflNyGg={pGBn} -z8#rphqU@7+;-&O+0x;@Iq&2`b6^' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wpaeco_';

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
define( 'DUPLICATOR_AUTH_KEY', 'lzaKlEMf_V.-:CPF@jW 6kz!/]R7tsn?aK)/%pZYgb_%MYB_VHVsmRIA1rtPWZY&' );
define( 'WP_PLUGIN_DIR', 'C:/OSPanel/domains/agro/wp-content/plugins' );
define( 'WPMU_PLUGIN_DIR', 'C:/OSPanel/domains/agro/wp-content/mu-plugins' );
define( 'WP_SITEURL', 'http://agro/' );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';//Disable File Edits
define( 'DISALLOW_FILE_EDIT', true );