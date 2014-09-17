<?php

class DefaultController extends BaseAdministratorController
{

    public $layout = '//layouts/column2';
    public $page_header = 'Administrator';

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionLogin()
    {
        $this->layout = '//layouts/column1';
        $this->page_header = 'Login Administrator';
        $model = new FormLoginAdministrator();

        if (isset($_POST['FormLoginAdministrator'])) {
            $model->attributes = $_POST['FormLoginAdministrator'];
            if ($model->validate()) {
                $model->login();
                $this->redirect(Yii::app()->getHomeUrl());
            }
        }

        $this->render('login', compact('model'));
    }

    public function actionLogout()
    {
        Yii::app()->user->logout(FALSE);
        $this->redirect(array('/'));
    }

    public function actionError()
    {
        $this->layout = '//layouts/column1';
        if ($error = Yii::app()->errorHandler->error) {
            $this->render('error', $error);
        }
    }

}