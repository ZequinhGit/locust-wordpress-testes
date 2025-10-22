<?php
// ===== Banco =====
define('DB_NAME', 'wordpress');
define('DB_USER', 'wpuser');
define('DB_PASSWORD', 'wppass');
define('DB_HOST', 'db:3306');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// ===== URL pública atrás do Nginx =====
define('WP_HOME',    'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');

// ===== Cookies (evita domínio preso) =====
define('COOKIE_DOMAIN', false);

// ===== AUTH KEYS & SALTS (iguais em todos os nós) =====
// Use UM conjunto e mantenha igual pra todos.
define( 'AUTH_KEY',         'e5eddf9664d1b8bdc46dd250cbfa969833f652c1');
define( 'SECURE_AUTH_KEY',  'c15b632dee236cf8606582776eabc7eb8950b0b2');
define( 'LOGGED_IN_KEY',    '097b20afe91127685b778cfe82a4b069abe7cc03');
define( 'NONCE_KEY',        'e154ddddc06785e3eb64a263722b3e32f614e14f');
define( 'AUTH_SALT',        'e7cd1b94983afea78ee68e5088f54bc949b0e5a6');
define( 'SECURE_AUTH_SALT', '41594bca8c4a7c0dc5da8aadc7e185e9f35c83a0');
define( 'LOGGED_IN_SALT',   '1893be093447bfcd1fb7e65f94e8bff23dbc9cc3');
define( 'NONCE_SALT',       '4896cb5edc6ae5f0525034438287d5d3297cc32e');

// Proxy: preserve HTTPS se vier do Nginx
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
  $_SERVER['HTTPS'] = 'on';
}

// ===== Prefixo e debug =====
$table_prefix = 'wp_';
define('WP_DEBUG', false);

// ===== Bootstrap =====
if (!defined('ABSPATH')) define('ABSPATH', __DIR__ . '/');
require_once ABSPATH . 'wp-settings.php';
