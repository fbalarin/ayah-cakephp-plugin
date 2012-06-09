ayah-cakephp-plugin
===================

CakePHP plugin for Ayah Captcha

Author: Felipe Elias Balarin (felipe@febinfo.com.br)

Quick start guide.

1. Get Ayah key.
http://portal.areyouahuman.com/signup

2. Setting.
Download ayah.php.
And put it in ayah_plugin/vendors.
http://portal.areyouahuman.com/downloads/ayah_php_bundle_1.0.2.zip

3. Config.
Insert keys in ayha_plugin/config/ayah_config.php .
	define( 'AYAH_PUBLISHER_KEY', "PUT_YOU_PUBLISHER_KEY_HERE");
	define( 'AYAH_SCORING_KEY', 'PUT_YOU_SCORING_KEY_HERE');

4. Controller.
	public $components = array('Ayah.Ayah');
	public $helpers = array('Ayah.Ayah');

5. View.
Inside <form> tags:
	echo $this->Ayah->show();
or (if the model you want to validate is different than the first one in controller)
	echo $this->Ayah->show(array('model' => 'Contact'));