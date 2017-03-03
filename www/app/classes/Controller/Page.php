<?php

/**
 *  Формирует основной контент страниц
 *
 */
class Controller_Page extends Controller_Base
{

    /**
     * Основной контент главной страницы
     *
     */
    public function action_index()
    {

        // Виджет - Фильтр
        $this->widgets['filter'] = false;

        // Виджет - Данные
        $this->widgets['data'] = $this->widgetLoad('Data/Index');
    }

    /**
     *  Страница - "Страны"
     */
    public function action_country()
    {

        $this->widgets['filter'] = $this->widgetLoad('filter/Country');


        $this->widgets['data'] = $this->widgetLoad('Data/Country');
    }

    /**
     * Страница - "Города"
     */
    public function action_city()
    {
        // Виджет - Фильтр
        $this->widgets['filter'] = $this->widgetLoad('filter/City');

        // Виджет - Данные
        $this->widgets['data'] = $this->widgetLoad('Data/City');
    }



    public function action_read_me()
    {

        $this->widgets['data'] = View::factory('site/v_read_me', $this->widgets)->render();
    }

    /*
    public function action_continent()
    {
    }

    public function action_regions()
    {

    }
    */

    /**
     * @throws View_Exception
     */
    public function after()
    {

        $this->template->content = View::factory('site/layout/v_page', $this->widgets)->render();

        parent::after(); // TODO: Change the autogenerated stub
    }
}