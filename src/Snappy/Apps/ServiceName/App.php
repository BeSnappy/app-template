<?php namespace Snappy\Apps\ServiceName;

use Snappy\Apps\App as BaseApp;

class App extends BaseApp {

	/**
	 * The name of the application.
	 *
	 * @var string
	 */
	public $name = 'Application Name';

	/**
	 * The application description.
	 *
	 * @var string
	 */
	public $description = 'Application Description';

	/**
	 * Any notes about this application
	 *
	 * @var string
	 */
	public $notes = 'Application Notes';

	/**
	 * The application's icon filename.
	 *
	 * @var string
	 */
	public $icon = 'icon.png';

	/**
	 * The application service's website.
	 *
	 * @var string
	 */
	public $website;

	/**
	 * The application author name.
	 *
	 * @var string
	 */
	public $author = 'Your Name';

	/**
	 * The application author e-mail.
	 *
	 * @var string
	 */
	public $email = 'Your Email';

	/**
	 * The settings required by the application.
	 *
	 * @var array
	 */
	public $settings = array();

}