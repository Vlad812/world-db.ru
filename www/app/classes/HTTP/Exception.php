<?php

/**
 *  Страница "Сообщение об Ошибке" запроса (404, 500)
 *
 */
class HTTP_Exception extends Kohana_HTTP_Exception
{
    /**
     *
     * @return Response
     */
    public function get_response()
    {

        // код ошибки (404, 500...)
        $code = $this->getCode();

        $attributes = array
        (

            'action' => 500, // Ошибка по умолчанию
            'message' => $this->getMessage()
        );

        if (isset($code)) $attributes['action'] = $code;

        // Генерируем страницу - "Сообщение об Ошибке"
        $page = Request::factory(Route::get('error')->uri($attributes))
            ->execute();


        $response = Response::factory()
            ->status($this->getCode())
            ->body($page);

        return $response;
    }

}