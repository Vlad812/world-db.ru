<?php

/**
 * Базовый Контроллер для обработки Ajax запросов
 *
 */

class Controller_Ajax extends Controller
{

    /**
     * @throws HTTP_Exception
     */
    public function before()
    {

        parent::before();

        // запрет вызова напрямую
        if (!$this->request->is_ajax()) throw HTTP_Exception::factory(404, 'Request is not ajax');
    }
}


