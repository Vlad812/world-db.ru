<?php

/**
 * Виджет - "Данные"
 *
 */
class Controller_Widget_Data extends Controller_Template
{

    /**
     *  Макет для виджета - "Данные"
     *
     * @var string
     */
    public $template = 'widgets/w_data_layout';

    /**
     *
     */
    public function action_index()
    {
        $activeTable = $activeBlocks = '';

        // режим представления
        $modeView = App::getModeView();

        switch ($modeView) {

            case 'table' :
                $activeTable = 'active';
                break;

            case 'blocks' :
                $activeBlocks = 'active';
                break;
        }

        $this->template->activeTable = $activeTable;

        $this->template->activeBlocks = $activeBlocks;

        // текущая страница, для которой определяются данные виджета
        $page = $this->request->param('page');

        // конфигурация виджета
        $config = Kohana::$config->load('widgets.data');

        $config = ($config[$page])? $config[$page] : $config['default'];

        // Для получения данных для виджета обращаемся к соответствующему контроллеру
        $this->template->view = Request::factory('widget/data/' . $page  .'/1')
            ->execute();

        if($config['itemsPanel']) {

            $this->template->totalItems = App::$totalItems;

            $this->template->itemsPanel = true;
        }

        // Пагинация
        if($config['pagination']) {

            $this->template->pagination = Request::factory('pag/1') ->execute();

            $this->template->showPagination = true;
        }
    }

}