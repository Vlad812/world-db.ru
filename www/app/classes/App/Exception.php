<?php

/**
 * Обработчик исключений приложнния
 *
 */
class App_Exception extends Kohana_Exception
{

    /**
     *  Вывод сообщения об ошибке
     *
     * @return void
     */
    public function dataError()
    {
        echo "Внутренняя ошибка сервиса !!!";

        exit();
    }

}