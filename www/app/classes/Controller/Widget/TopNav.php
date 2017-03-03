<?php

/**
 *  Виджет Top - навигация
 */
class Controller_Widget_TopNav extends Controller
{

    /**
     * @throws Kohana_Exception
     * @throws View_Exception
     */
    public function action_index()
    {

        $page = $this->request->param('page');

        $data['page'] = ($page == 'Index') ? '' : $page;

        $data['configNav'] = Kohana::$config->load('top_nav')->as_array();

        $topNav = View::factory('widgets/w_top_nav', $data)->render();

        $this->response->body("$topNav");
    }

}