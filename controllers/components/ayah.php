<?php

class AyahComponent extends Object
{

    function startup (&$controller)
    {
        if (isset($controller->params['form']['session_secret']))
        {
            if (!isset($controller->data['ayah_model']))
            {
                $modelClass = $controller->modelClass;
            }
            else
            {
                $modelClass = $controller->data['ayah_model'];
            }
            if (!empty($controller->params['form']['session_secret']) )
            {
                $controller->data[$modelClass]['session_secret'] = $controller->params['form']['session_secret'];
            }

            $controller->$modelClass->Behaviors->attach('Ayah.Validation');
        }
    }

}
