<?php

class AdministratorModule extends CWebModule
{
    public function init()
    {
        // import the module-level models and components
        $this->setImport(array(
            'administrator.models.*',
            'administrator.components.*',
        ));

        Yii::app()->setComponents(array(
                'user' => array(
                    'allowAutoLogin' => true,
                    'class' => 'AdministratorWebUser',
                ),
                'errorHandler' => array(
                    'errorAction' => 'administrator/default/error',
                ))
        );

        Yii::app()->user->loginUrl = Yii::app()->createAbsoluteUrl('administrator/default/login');
        Yii::app()->homeUrl = Yii::app()->createAbsoluteUrl('administrator');
    }

    public function beforeControllerAction($controller, $action)
    {
        if (parent::beforeControllerAction($controller, $action)) {
            // this method is called before any module controller action is performed
            // you may place customized code here
            return true;
        } else
            return false;
    }
}
