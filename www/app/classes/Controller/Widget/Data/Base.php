<?php

/**
 *
 *
 */
class Controller_Widget_Data_Base extends Controller
{

    /**
     *  Объект модели.
     *
     * @var object
     */
    protected $_model;

    /**
     *  Полученные Данные от модели.
     *
     * @var array
     */
    protected $_data;

    public function before()
    {

        parent::before(); // TODO: Change the autogenerated stub
    }

    public function action_index()
    {

        // Количество записей
        if(App::$updateTotalItems or $this->request->param('default') or App::$updatePagination){

            App::$totalItems = $this->_model->getCountItems()[0]['total_item'];
        }

        $limit = App::getItemsPerPage();

        //
        $this->_data = $this->_model-> setLimit($limit)
            -> setOffset($limit, App::$currentPagin)
            -> getData();

    }

    /**
     * @throws View_Exception
     */
    public function after()
    {
        // определяем шаблон для режима представления данных (пр. таблица, карточки)
        $viewPath = "widgets/". App::getModeView()."/".$this->_view;

        //
        $view = View::factory($viewPath, $this->_data)->render();

        $this->response->body($view);

        parent::after(); // TODO: Change the autogenerated stub
    }
}