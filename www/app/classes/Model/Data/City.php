<?php

/**
 * Данные для страницы "Города"
 *
 */
class Model_Data_City extends Model_Data_Base
{
    /**
     *  имя таблицы БД к которой будет производиться запрос
     *
     * @var string
     */
    protected $_table = 'v_city';


    /**
     * @param $nameCountry
     */
    protected function filterCountry($nameCountry)
    {

       $this->_query->where('nameCountry', '=', $nameCountry);

    }

    /**
     * @param
     */
    protected function filterCountryCapital($v)
    {

        $this->_query->where('Capital', '=', 'Capital');
    }

}