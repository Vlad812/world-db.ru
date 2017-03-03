<?php

/**
 *  Базовый класс для: виджет - "Фильтр"
 */
abstract class Controller_Widget_Filter extends Controller_Template
{
    /**
     *  макет виджета "Фильтр"
     *
     * @var string
     */
    public $template = 'widgets/filters/w_filter_layout';

    /**
     *
     */
    public function before()
    {
        parent::before();

        // массив элементов фильтра для подстановки в макет виджета
        $this->template->filterSection = [];
    }

}