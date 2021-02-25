<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'project');

/** Имя пользователя MySQL */
define('DB_USER', 'project');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '06022019');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1:3307');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';%ZuEnx;mgQ gD#//%zWZJi6B3 9QD5%Sc?zl8cd$%Cs57y=$P(_h|L~C.=$h>Os');
define('SECURE_AUTH_KEY',  '=#oYB4977(&rBRx=86:VvlvL=t4U;Ev$,ui]E. 3&0(rEh%&:!lOi+#JpA8<bi8,');
define('LOGGED_IN_KEY',    'u[L?=[rO^,E34Q#Q1^nY)yz^IEFZk6uwWHed!p>WlAlkx6HVJ.Y9.5=-MCN8-zW3');
define('NONCE_KEY',        'mzX*+b5)JR!Husr7!vRU5y_2=1.!kz)71W;<kHO0l=![8.RYU5=N)4Do4gPR^ppZ');
define('AUTH_SALT',        'B|i*W%UtrVtBF!C#}shMInNHN4_:U5Ep/yfO2?z_kW!#V:Q;Mw>1yt>P&w.%Nla[');
define('SECURE_AUTH_SALT', 'Or8X;U-b[xIi>U8S@h)<s@$UPckOYk.m`~Z)anmC9W^6>-5;]mWuHEA~|se>jrY{');
define('LOGGED_IN_SALT',   '/Q Lt5~1]Vm(sbqz-~,.WPOiI. s:Q3?nhZ0u6@p4+FgU9*peSzJp8=1MR+ce*?B');
define('NONCE_SALT',       'sSIE/53j6mtu#xPFEJAr9f_M9FaI%_n703]Kcuf4~QXmQKR@}i0u$xe44au/>M.e');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
