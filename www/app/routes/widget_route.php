<?php

/**
 *  Роуты для виджетов
 */


/**
 * Роут для виджета - Фильтр
 *
 */

Route::set('widget_filter', 'widget/filter/<controller>(/<param>)')
    ->defaults(array(
        'directory' => 'Widget/Filter/',
        'action'     => 'index',
    ));

/**
 *  виджет "Данные"
 *  subroute
 *
 */

Route::set('widget_view_data', 'widget/data/<controller>(/<default>)')
    ->defaults(array(
        'directory' => 'Widget/Data/',
        'action'     => 'index',
    ));


/**
 *
 */
Route::set('widget', 'widget/<controller>(/<page>)')
    ->defaults(array(
        'directory' => 'Widget/',
        'action'     => 'index',
    ));

