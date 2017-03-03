<?php

/**
 *  Настройки соединения с Базой Данных
 *
 */

return array
(

    'default' => array(
        'type'       => 'PDO',
        'connection' => array(

            'dsn'        => 'mysql:host=localhost; dbname=world_db',
            'username'   => 'root',
            'password'   => '',
            'persistent' => FALSE,
        ),
        /**
         * The following extra options are available for PDO:
         *
         * string   identifier  set the escaping identifier
         */
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => TRUE
    )

);