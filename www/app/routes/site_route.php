<?php

/**
 *
 */


/**
 * Роут для обработки Ajax запросов
 *
 */
Route::set('ajax', 'ajax/<controller>/<action>(/<nameFilter>)')
    ->defaults(array(
        'directory' => 'Ajax/',

    ));

/**
 * Роут для Пагинатора
 *
 */

Route::set('pagination', 'pag/<page>')
    ->defaults(array(
       'action' =>'index',

        'controller' => 'Pagination'
    ));


/**
 *
 *
 */
Route::set('page', '<action>',
    array(
        'action' => '(city|regions|continent|country|read_me)'
    ))
    ->defaults(array(

        'controller' => 'Page'

    ));


/**
 *
 *
 */
Route::set('error', 'error/<action>(/<message>)',
    array('action' => '[0-9]++', 'message' => '.+'))
    ->defaults(array(
        'controller' => 'Errors',
    ));


/**
 *
 *
 */
Route::set('default', '(<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'controller' => 'Page',
        'action' => 'Index'

    ));