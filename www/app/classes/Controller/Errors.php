<?php

/**
 *  Отвечает за вывод сообщения об ошибке
 *
 */
class Controller_Errors extends Controller_Base
{

    /**
     * @return void
     */
    public function action_404()
    {
        $this->template->title = 'Запрашиваемая страница не найдена.';

        $this->template->content = View::factory('site/errors/v_404')->render();

    }

    /**
     * @return void
     */
    public function action_500()
    {
        $this->template->title = 'Внутренняя ошибка сервера.';

        $this->template->content = View::factory('site/errors/v_500')->render();
    }

}