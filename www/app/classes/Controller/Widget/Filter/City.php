<?php

/**
 * Формирует элементы фильтра для страницы "Города"
 */

class Controller_Widget_Filter_City extends Controller_Widget_Filter
{
    public function action_index()
    {
        $this->template->nameFilter = 'City';

        $this->template->filterSection[] = View::factory('widgets/filters/sections/w_country_list')->render();

        $this->template->filterSection[] = View::factory('widgets/filters/sections/w_country_checkbox')->render();
    }
}