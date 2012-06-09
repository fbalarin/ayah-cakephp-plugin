<?php

class AyahHelper extends Helper
{

    public $helpers = array('Form');
    function __construct($settings = array()){
        $this->view = ClassRegistry::getObject('view');
    }


    function show ($options)
    {
        App::import('Vendor', 'Ayah.ayah');
        $integration = new AYAH();
        $html = $integration->getPublisherHTML();
        if (isset($options['model']))
        {
            $html .= $this->Form->input('ayah_model', array('value' => $options['model'], 'type' => 'hidden'));
        }
        return $html;
    }

    function error ()
    {
        return $this->Form->error('session_secret');
    }

}
