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
                'actions' => array('login', 'error', 'logout'),
                'users' => array('*'),
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
                'label' => 'Home',
                'url' => Yii::app()->getHomeUrl(),
                'icon' => 'home',
                'active' => $this->getId() == 'default' && $this->getAction()->getId() == 'index',
            ),
            array(
                'label' => 'Logout',
                'url' => $this->createUrl('/administrator/default/logout'),
                'icon' => 'off',
            ),
        );
        return parent::beforeAction($action);
    }

} 