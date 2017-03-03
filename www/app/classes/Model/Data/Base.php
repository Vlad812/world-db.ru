<?php

/**
 * Базовая Модель для обработки и получения данных для
 * представления (таблица, карточка.. )
 *
 */
abstract class Model_Data_Base extends Model
{
    /**
     *  Исходные Данные для фильтра, полученные от пользователя.
     *
     * @var array
     */
    public $dataFilter = [];

    /**
     *  Объект QueryBuilder
     *
     * @var object
     */
    protected $_query;

    /**
     *  Поля таблицы для выборки
     *
     * @var string | array
     */
    protected $_fields;

    /**
     *  Результат обработки запроса
     *
     * @var array
     */
    protected $_data;


    /**
     * Model_Base_Table constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {

        // Создаём объкт Query Builder
        $this->_query = DB::select()->from($this->_table);

        if ($data) {
            $this->dataFilter = $data;

            $this->applyUserFilter();
        }
    }

    /**
     * @param $limit
     * @return $this
     */
    public function setLimit($limit)
    {

        $this->_query ->limit($limit);

        return $this;
    }

    /**
     * @param $currentPage
     * @return $this
     */
    public function setOffset($limit, $currentPage)
    {

        $this->_data['offset'] = $offset = ($currentPage != 1) ? $limit * ($currentPage - 1) : 0;

        $this->_query->offset($offset);

        return $this;

    }


    /**
     * @return array
     */
    public function getData()
    {

        // выполняем запрос
        $this->_data['list'] = $this->_query->execute()->as_array();

        return $this->_data;
    }

    /**
     *  Применить пользовательский фильтр
     *
     * @return mixed
     */
    private function applyUserFilter()
    {
        foreach ($this->dataFilter as $k => $v) {
            try {
                // имя метода-фильтра
                $method = 'filter' . $k;

                //  проверка существования метода
                if (!method_exists($this, $method)) throw new App_Exception();

                //
                $this->$method($v);
            } catch (App_Exception $e) {
                $e->dataError();
            }
        }
    }

    /**
     * Количество записей с учётом пользовательского фильтра
     */
    public function getCountItems()
    {

        $total = clone $this->_query;

        $total->select(array(DB::expr('COUNT(*)'), 'total_item'));

        return $total->execute()->as_array();
    }
}