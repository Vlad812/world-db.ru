<?php

/**
 * Формирует элементы фильтра для страницы "Страны"
 */
class Controller_Widget_Filter_Country extends Controller_Widget_Filter
{

    public function action_index()
    {
        $this->template->nameFilter = 'Country';

        // Список языков
        $this->template->filterSection[] = View::factory('widgets/filters/sections/w_lng_list')->render();

        // Формы Правления
        $this->template->filterSection[] = View::factory('widgets/filters/sections/w_govform_list')->render();
    }
}