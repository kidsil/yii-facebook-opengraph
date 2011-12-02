<?php
/**
 * Registration class file.
 *
 * @author Evan Johnson <thaddeusmt@gmail.com>
 * @author Ianaré Sévi (original author) www.digitick.net
 * @link https://github.com/splashlab/yii-facebook-opengraph
 * @copyright Copyright &copy; 2011 SplashLab Social  http://splashlabsocial.com
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2
 *
 */

require_once 'SPluginBase.php';

/**
 * The registration plugin allows users to easily sign up for your website with
 * their Facebook account.
 *
 * @see http://developers.facebook.com/docs/plugins/registration
 */
class Registration extends SPluginBase
{
	/**
	 * @var string If the user arrives logged into Facebook, but has not registered for
	 * your site, the button will say Register and clicking it will take the
	 * user to your registration-url.
	 */
	public $registration_url;
	/**
	 * @var string The URI that will process the signed_request. It must be
	 * prefixed by your Site URL.
	 */
	public $redirect_uri;
	/**
	 * @var string Comma separated list of Named Fields, or JSON of Custom
	 * Fields.
	 */
	public $fields;
	/**
	 * @var boolean Only allow users to register by linking their Facebook profile.
	 *
	 * Use this if you do not have your own registration system. Default: false.
	 */
	public $fb_only;
	/**
	 * @var integer The width in pixels. If the width is < 520 the plugin will
	 * render in a small layout.
	 */
	public $width;
	/**
	 * @var integer
	 */
	public $client_id;

	public function run()
	{
		parent::run();
		$this->client_id = Yii::app()->facebook->appId;
		$params = $this->getParams();
		$this->renderTag('registration',$params);
	}

}