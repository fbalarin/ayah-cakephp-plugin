<?php
class ValidationBehavior extends ModelBehavior {
	function beforeValidate(&$model) {
		$model->validate['session_secret'] = array(
			'checkAyah' => array(
				'rule' => array('checkAyah', 'session_secret'),
				'allowEmpty' => false,
                                'required' => true,
				'message' => __('You did not solve the challenge correctly. Please try again.',true),
			),
		);
	}

	function checkAyah(&$model, $data, $target) {
		App::import('Vendor', 'Ayah.ayah');
                $integration = new AYAH();
                $score = $integration->scoreResult();
                if($score)
                {
                    $integration->recordConversion();
                }
                return $score;
	}
}
