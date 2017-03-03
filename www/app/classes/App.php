<?php

/**
 *
 */
class App
{

    /**
     *  экземпляр объекта для работы с сессией
     *
     * @var object
     */
    public static $session;

    /**
     *  Режим (представление) просмотра данных (таблицы, карточки)
     *
     * @var string
     */
    public static $modeView = '';

    /**
     *  Режим (представление) просмотра данных по умолчанию
     *
     * @var string
     */
    private static $defaultModeView = 'table';


    /**
     *
     *
     * @var array
     */
    public static $userFilter = [];

    /**
     *
     *
     * @var int
     */
    public static $itemsPerPage;

    /**
     *  по умолчанию
     *
     * @var string
     */
    private static $defaultItemsPerPage = 10;

    /**
     * @var int
     */
    public static $currentPagin = 1;


    /**
     * @var bool
     */
    public static $updatePagination;

    /**
     *
     * @var int
     * @use Controller_Pagination
     */
    public static $totalItems;

    /**
     *
     * @var bool
     */
    public static $updateTotalItems;


    /**
     * Инициализация приложения
     *
     * @return void
     */
    public static function init()
    {

        self::$session = Session::instance();

        self::_modeView();
    }

    /**
     * @param  $data string
     * @return void
     */
    public static function setData($data)
    {

        $data = json_decode($data, true);

        if ($data['mode_view']) {

            self::$modeView = $data['mode_view'];

            // сохраняем текущий режим представления данных
            self::saveModeView($data['mode_view']);
        }

        if ($data['user_filter']) {

            foreach ($data['user_filter'] as $v) {

                self::$userFilter[$v['name']] = $v['value'];
            }
        }

        if ($data['items_per_page']){

            self::$itemsPerPage = (int)$data['items_per_page'];
        }

        if ($data['current_pagin']) {

            self::$currentPagin = (int)$data['current_pagin'];
        }

        self::$updateTotalItems = (bool)$data['update_total_items'];

        self::$updatePagination = (bool)$data['update_pagination'];

    }


    /**
     *  Сохранение типа режима представления данных
     *
     *  @param $modeView string
     *  @return void
     */
    public static function saveModeView($modeView)
    {

        self::$session->set('mode_view', $modeView);
    }

    /**
     *  Получить тип режима представления
     *  @return string
     */
    public static function getModeView()
    {

        return (self::$modeView) ? self::$modeView : self::$defaultModeView;
    }

    /**
     *
     *  @return int
     */
    public static function getItemsPerPage()
    {

        return (self::$itemsPerPage) ? self::$itemsPerPage : self::$defaultItemsPerPage;
    }

    /**
     *
     *  @return void
     */
    private static function _modeView()
    {

        $modeView = self::$session->get('mode_view');

        self::$modeView = ($modeView) ? $modeView : '';
    }

}