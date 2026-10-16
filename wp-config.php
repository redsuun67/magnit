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
define( 'DB_NAME', 'mysite1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         '5=^HVSJ#d6w)[XSbtBjTPlLeq!l~b;?d|.3x;#NAXBL`YSJ.p7B<q%%rQ-n6I617' );
define( 'SECURE_AUTH_KEY',  '7=lL#I{TzsTETL)`$+0SSsrj 7{,;xy{)tt?>a1K.)8zVBanmO^]/oT6RGIxcA{7' );
define( 'LOGGED_IN_KEY',    'o@,aMm]n!RGBdY&[u=&gtX@vOfv+_^Q(Ixjsm1=m}JOn?CL^4(}Zx9q}2GEm4tK1' );
define( 'NONCE_KEY',        'z<{P<IIiX$u#pwfc*Tb>_^#eWh+?OE.ZqCMVyF93-.P[7Yuvkqiozqn@;ojzrnzU' );
define( 'AUTH_SALT',        'l!**TWH]Ja7z><vzL!UXtLzz.4Le4>^_I* hI#{vZNAe ($C&na~*(J1v#?Pkc5+' );
define( 'SECURE_AUTH_SALT', 'yirDRkw!/0dko?B#N@V2ujaP^;<}vIGV9[3NGxjQ_0,%Fg[d*lPxN<UDqpybge,n' );
define( 'LOGGED_IN_SALT',   'X9$[^HA0I~@Uyk:K]ar|M?[*qyLTI%hAPdu0xg:c4d!+o15n(_C!5Xv K,,|yDxm' );
define( 'NONCE_SALT',       'rjkKP1j6/X&NQG`jgP!)48!j$Nr{3C([q(^,7!Xy;YjgeyS!BIUYY$0gd#Q OqL;' );

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
