<?php

class BaseAdministratorController extends Controller
{

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions' => array('login'),
                'users' => array('?'),
            ),
            array('allow',
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    protected function beforeAction($action)
    {
        $this->side_bar = array(
            array(
                'label' => 'Navigasi',
                'itemOptions' => array('class' => 'nav-header')
            ),
            array(
                'label' => 'Home',
                'url' => Yii::app()->getHomeUrl(),
            ),
            array(
                'label' => 'Logout',
                'url' => $this->createUrl('/administrator/default/logout'),
            ),
        );
        return parent::beforeAction($action);
    }

} 