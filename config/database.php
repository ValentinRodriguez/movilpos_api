<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'dgii' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DGII_HOST', '127.0.0.1'),
            'port' => env('DGII_PORT', '3306'),
            'database' => env('DGII_DATABASE', 'forge'),
            'username' => env('DGII_USERNAME', 'forge'),
            'password' => env('DGII_PASSWORD', ''),
            'unix_socket' => env('DGII_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_miscelaneos' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('MISC_HOST', '127.0.0.1'),
            'port' => env('MISC_PORT', '3306'),
            'database' => env('MISC_DATABASE', 'forge'),
            'username' => env('MISC_USERNAME', 'forge'),
            'password' => env('MISC_PASSWORD', ''),
            'unix_socket' => env('MISC_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_compras' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('CMP_HOST', '127.0.0.1'),
            'port' => env('CMP_PORT', '3306'),
            'database' => env('CMP_DATABASE', 'forge'),
            'username' => env('CMP_USERNAME', 'forge'),
            'password' => env('CMP_PASSWORD', ''),
            'unix_socket' => env('CMP_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_contabilidad' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('CBG_HOST', '127.0.0.1'),
            'port' => env('CBG_PORT', '3306'),
            'database' => env('CBG_DATABASE', 'forge'),
            'username' => env('CBG_USERNAME', 'forge'),
            'password' => env('CBG_PASSWORD', ''),
            'unix_socket' => env('CBG_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_cuentasxpagar' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('CXP_HOST', '127.0.0.1'),
            'port' => env('CXP_PORT', '3306'),
            'database' => env('CXP_DATABASE', 'forge'),
            'username' => env('CXP_USERNAME', 'forge'),
            'password' => env('CXP_PASSWORD', ''),
            'unix_socket' => env('CXP_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_empresa' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('EMP_HOST', '127.0.0.1'),
            'port' => env('EMP_PORT', '3306'),
            'database' => env('EMP_DATABASE', 'forge'),
            'username' => env('EMP_USERNAME', 'forge'),
            'password' => env('EMP_PASSWORD', ''),
            'unix_socket' => env('EMP_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_cuentasxcobrar' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('CXC_HOST', '127.0.0.1'),
            'port' => env('CXC_PORT', '3306'),
            'database' => env('CXC_DATABASE', 'forge'),
            'username' => env('CXC_USERNAME', 'forge'),
            'password' => env('CXC_PASSWORD', ''),
            'unix_socket' => env('CXC_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        
        'mov_globales' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('GBL_HOST', '127.0.0.1'),
            'port' => env('GBL_PORT', '3306'),
            'database' => env('GBL_DATABASE', 'forge'),
            'username' => env('GBL_USERNAME', 'forge'),
            'password' => env('GBL_PASSWORD', ''),
            'unix_socket' => env('GBL_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_inventario' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('INV_HOST', '127.0.0.1'),
            'port' => env('INV_PORT', '3306'),
            'database' => env('INV_DATABASE', 'forge'),
            'username' => env('INV_USERNAME', 'forge'),
            'password' => env('INV_PASSWORD', ''),
            'unix_socket' => env('INV_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_rrhh' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('RRHH_HOST', '127.0.0.1'),
            'port' => env('RRHH_PORT', '3306'),
            'database' => env('RRHH_DATABASE', 'forge'),
            'username' => env('RRHH_USERNAME', 'forge'),
            'password' => env('RRHH_PASSWORD', ''),
            'unix_socket' => env('RRHH_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_usuarios' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('USERS_HOST', '127.0.0.1'),
            'port' => env('USERS_PORT', '3306'),
            'database' => env('USERS_DATABASE', 'forge'),
            'username' => env('USERS_USERNAME', 'forge'),
            'password' => env('USERS_PASSWORD', ''),
            'unix_socket' => env('USERS_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_tienda' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('STORE_HOST', '127.0.0.1'),
            'port' => env('STORE_PORT', '3306'),
            'database' => env('STORE_DATABASE', 'forge'),
            'username' => env('STORE_USERNAME', 'forge'),
            'password' => env('STORE_PASSWORD', ''),
            'unix_socket' => env('STORE_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mov_ventas' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('VNT_HOST', '127.0.0.1'),
            'port' => env('VNT_PORT', '3306'),
            'database' => env('VNT_DATABASE', 'forge'),
            'username' => env('VNT_USERNAME', 'forge'),
            'password' => env('VNT_PASSWORD', ''),
            'unix_socket' => env('VNT_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
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
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
