<?php
/**
 * This is email configuration file.
 *
 * Use it to configure email transports of Cake.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 2.0.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * In this file you set up your send email details.
 *
 * @package       cake.config
 */
/**
 * Email configuration class.
 * You can specify multiple configurations for production, development and testing.
 *
 * transport => The name of a supported transport; valid options are as follows:
 *		Mail 		- Send using PHP mail function
 *		Smtp		- Send using SMTP
 *		Debug		- Do not send the email, just return the result
 *
 * You can add custom transports (or override existing transports) by adding the
 * appropriate file to app/Network/Email.  Transports should be named 'YourTransport.php',
 * where 'Your' is the name of the transport.
 *
 * from =>
 * The origin email. See CakeEmail::from() about the valid values
 *
 */
class EmailConfig {
    public $default = array(
		'transport' => 'Smtp',
		'from' => array('no-reply@rajdeep.crystalbiltech.com' => 'The Button App'),
		'host' => 'localhost',
		'port' => 25,
		'timeout' => 30,   
		'username' => 'no-reply@rupak.crystalbiltech.com',
		'password' => 'no-reply',
		'client' => null,
		'log' => false
		//'charset' => 'utf-8',   
		//'headerCharset' => 'utf-8
	);

 
	public $smtp = array(
		'transport' => 'Smtp',
		'from' => array('work@rupak.crystalbiltech.com' => 'The Button App'),
		'host' => 'localhost',
		'port' => 25,
		'timeout' => 30,
		'username' => 'work@rupak.crystalbiltech.com',
		'password' => null,
		'client' => null,
		'log' => false
		//'charset' => 'utf-8',
		//'headerCharset' => 'utf-8',
	);
        

	public $fast = array(
		'from' => 'you@localhost',
		'sender' => null,
		'to' => null,
		'cc' => null,
		'bcc' => null,
		'replyTo' => null,
		'readReceipt' => null,
		'returnPath' => null,
		'messageId' => true,
		'subject' => null,
		'message' => null,
		'headers' => null,
		'viewRender' => null,
		'template' => false,
		'layout' => false,
		'viewVars' => null,
		'attachments' => null,
		'emailFormat' => null,
		'transport' => 'Smtp',
		'host' => 'localhost',
		'port' => 25,
		'timeout' => 30,
		'username' => 'test@rupak.crystalbiltech.com',
		'password' => null,
		'client' => null,
		'log' => true,
		//'charset' => 'utf-8',
		//'headerCharset' => 'utf-8',
	);

}
    