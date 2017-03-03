<?php

/**
 * Базовый контроллер
 *
 */

abstract class Controller_Base extends Controller_Template
{
    /**
     *  Главный шаблон страниц
     *
     * @var string
     */
    public $template = 'site/layout/v_main';

    /**
     *  массив для "готовых" виджетов
     *
     * @var array
     */
    protected $widgets = [];

    /**
     *
     */
    public function before()
    {
        parent::before();

        $title = Kohana::$config->load('content')->get($this->request->action());

        $this->template->title = "World DB - ".$title;

        $this->template->h1 = $title;

        $this->template->top_nav = $this->widgetLoad('TopNav/' . $this->request->action());
    }

    /**
     *  загрузчик Виджета
     *
     * @param bool|TRUE $widget
     * @param array $client_params
     * @return Request|void
     * @throws HTTP_Exception
     */
    public function widgetLoad($widget = TRUE, $client_params = array())
    {
        return Request::factory('widget/' . $widget, $client_params)->execute();
    }
}