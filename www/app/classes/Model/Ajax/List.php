<?php

/**
 *
 *
 */
class Model_Ajax_List extends Model
{

    /**
     * @return mixed
     */
    public function getLngList()
    {

        $sql = "SELECT DISTINCT `Language`
                FROM country_language
                ORDER BY `Language`ASC";

        return DB::query(Database::SELECT, $sql)->execute()->as_array();
    }

    /**
     * @return mixed
     */
    public function getGovFormList()
    {

        $sql = "SELECT DISTINCT `GovernmentForm`
                FROM country";

        return DB::query(Database::SELECT, $sql)->execute()->as_array();
    }


    /**
     * @return mixed
     */
    public function getCountryList()
    {

        $sql = "SELECT `name`
                FROM country
                ORDER BY `name` ASC";

        return DB::query(Database::SELECT, $sql)->execute()->as_array();
    }

}