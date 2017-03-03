<?php

/**
 * Данные для страницы "Страны"
 *
 */
class Model_Data_Country extends Model_Data_Base
{
    /**
     *  имя таблицы БД к которой будет производиться запрос
     *
     * @var string
     */
    protected $_table = 'v_country';


    /**
     *
     *
     * @param $govForm
     */
    protected function filterGovForm($govForm)
    {

        $this->_query->where('GovForm', '=', $govForm);
    }

    /**
     * @param $lng
     */
    protected function filterLng($lng)
    {
        // подзапрос - получить список стран
        $sub = DB::select('CountryCode')
            ->from('country_language')
            ->where('Language', '=', $lng);

        $this->_query->where('Code', 'IN', [$sub]);
    }

}