<?php
/**
 * Configuração básica do WordPress
 */

// ** Configurações do banco de dados ** //
define( 'DB_NAME', 'wordpress_db' );
define( 'DB_USER', 'username' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Chaves de autenticação ** //
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// ** Prefixo das tabelas do banco de dados ** //
$table_prefix = 'wp_';

// ** Configurações do WordPress ** //
define( 'WP_DEBUG', false );

// ** Configuração absoluta do caminho ** //
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// ** Carrega as configurações do WordPress e inicializa ** //
require_once ABSPATH . 'wp-settings.php';