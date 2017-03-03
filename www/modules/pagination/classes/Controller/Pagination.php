<?php

/**
 * Пагинация
 */
class Controller_Pagination extends Controller
{

    public function action_index()
    {

        $pagination = Pagination::factory(
                                            ['total_items' => App::$totalItems,
                                             'items_per_page' => App::getItemsPerPage()]
                                         )
            ->route( Route::get('pagination') )

            ->route_params( ['controller' => $this->request->controller()] );

        $this->response->body($pagination);
    }

}