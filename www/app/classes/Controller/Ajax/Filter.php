<?php

/**
 *  Отвечает за обработку Ajax запросов.
 *
 */
class Controller_Ajax_Filter extends Controller_Ajax
{

    /**
     * @throws Request_Exception
     */
    public function action_index()
    {

        //
        APP::setData($this->request->post()['user_data']);

        //  имя Контроллера для генерации данных (например: Country)
        $nameFilter = $this->request->param('nameFilter');

        //
        $view = (string)Request::factory('widget/data/' . $nameFilter)->execute();

        //
        $pagination = (App::$updateTotalItems or App::$updatePagination) ?
                      (string)Request::factory('pag/' . App::$currentPagin)->execute() : NULL;

        //
        $json = json_encode(['view' => $view,

                            'pagination' => $pagination ,

                            'total_items' => (App::$updateTotalItems)? App::$totalItems : NULL
                            ]
        );

        $this->response->body($json);
    }
}