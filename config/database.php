<?php

declare(strict_types=1);

use Illuminate\Support\Str;

// Database configuration constants
const DEFAULT_HOST = '127.0.0.1';
const DEFAULT_DB_NAME = 'laravel';
const DEFAULT_USERNAME_ROOT = 'root';
const DEFAULT_PASSWORD_EMPTY = '';
const MYSQL_PORT = '3306';
const PGSQL_PORT = '5432';
const PGSQL_USERNAME = 'laravel';
const PGSQL_PASSWORD = 'secret';
const SQLSRV_HOST = 'localhost';
const SQLSRV_PORT = '1433';
const REDIS_PORT = '6379';
const REDIS_DB_DEFAULT = '0';
const REDIS_DB_CACHE = '1';
const CHARSET_UTF8MB4 = 'utf8mb4';
const CHARSET_UTF8 = 'utf8';
const COLLATION_UTF8MB4 = 'utf8mb4_unicode_ci';

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'pgsql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', DEFAULT_HOST),
            'port' => env('DB_PORT', MYSQL_PORT),
            'database' => env('DB_DATABASE', DEFAULT_DB_NAME),
            'username' => env('DB_USERNAME', DEFAULT_USERNAME_ROOT),
            'password' => env('DB_PASSWORD', DEFAULT_PASSWORD_EMPTY),
            'unix_socket' => env('DB_SOCKET', DEFAULT_PASSWORD_EMPTY),
            'charset' => env('DB_CHARSET', CHARSET_UTF8MB4),
            'collation' => env('DB_COLLATION', COLLATION_UTF8MB4),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? (function () {
                // PHP 8.4+ uses Pdo\Mysql::ATTR_SSL_CA, older versions use PDO::MYSQL_ATTR_SSL_CA
                $sslCaAttribute = defined('Pdo\\Mysql::ATTR_SSL_CA')
                    ? constant('Pdo\\Mysql::ATTR_SSL_CA')
                    : PDO::MYSQL_ATTR_SSL_CA;
                return array_filter([
                    $sslCaAttribute => env('MYSQL_ATTR_SSL_CA'),
                ]);
            })() : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', DEFAULT_HOST),
            'port' => env('DB_PORT', MYSQL_PORT),
            'database' => env('DB_DATABASE', DEFAULT_DB_NAME),
            'username' => env('DB_USERNAME', DEFAULT_USERNAME_ROOT),
            'password' => env('DB_PASSWORD', DEFAULT_PASSWORD_EMPTY),
            'unix_socket' => env('DB_SOCKET', DEFAULT_PASSWORD_EMPTY),
            'charset' => env('DB_CHARSET', CHARSET_UTF8MB4),
            'collation' => env('DB_COLLATION', COLLATION_UTF8MB4),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? (function () {
                // PHP 8.4+ uses Pdo\Mysql::ATTR_SSL_CA, older versions use PDO::MYSQL_ATTR_SSL_CA
                $sslCaAttribute = defined('Pdo\\Mysql::ATTR_SSL_CA')
                    ? constant('Pdo\\Mysql::ATTR_SSL_CA')
                    : PDO::MYSQL_ATTR_SSL_CA;
                return array_filter([
                    $sslCaAttribute => env('MYSQL_ATTR_SSL_CA'),
                ]);
            })() : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', DEFAULT_HOST),
            'port' => env('DB_PORT', PGSQL_PORT),
            'database' => env('DB_DATABASE', DEFAULT_DB_NAME),
            'username' => env('DB_USERNAME', PGSQL_USERNAME),
            'password' => env('DB_PASSWORD', PGSQL_PASSWORD),
            'charset' => env('DB_CHARSET', CHARSET_UTF8),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => env('DB_SSLMODE', 'prefer'),
            'options' => extension_loaded('pdo_pgsql') ? [
                PDO::ATTR_PERSISTENT => env('DB_PERSISTENT', false),
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_STRINGIFY_FETCHES => false,
            ] : [],
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', SQLSRV_HOST),
            'port' => env('DB_PORT', SQLSRV_PORT),
            'database' => env('DB_DATABASE', DEFAULT_DB_NAME),
            'username' => env('DB_USERNAME', DEFAULT_USERNAME_ROOT),
            'password' => env('DB_PASSWORD', DEFAULT_PASSWORD_EMPTY),
            'charset' => env('DB_CHARSET', CHARSET_UTF8),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', DEFAULT_HOST),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', REDIS_PORT),
            'database' => env('REDIS_DB', REDIS_DB_DEFAULT),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', DEFAULT_HOST),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', REDIS_PORT),
            'database' => env('REDIS_CACHE_DB', REDIS_DB_CACHE),
        ],

    ],

];
