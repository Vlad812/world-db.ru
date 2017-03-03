<?php

/**
 * Контроллер отвечает за вывод данных для главной страница
 */

class Controller_Widget_Data_Index extends Controller_Widget_Data_Base
{

    protected $_view = 'w_index';

    public function before()
    {

        $this->_model = new Model_Data_Index([]);

        parent::before(); // TODO: Change the autogenerated stub
    }

    /**
     *
     */
    public function action_index()
    {

        $this->_data = $this->_model-> getData();

    }

}