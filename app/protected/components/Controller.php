<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
    public $layout = '//layouts/column1';
    public $side_bar = array();
    public $menu_bar = array();
    public $breadcrumbs = array();
    public $page_header = '';
    public $sub_page_header = '';
}