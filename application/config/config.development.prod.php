<?php

/**
 * Configuration for DEVELOPMENT environment
 * To create another configuration set just copy this file to config.production.php etc. You get the idea :)
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard / no errors in production.
 * It's a little bit dirty to put this here, but who cares. For development purposes it's totally okay.
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * Returns the full configuration.
 * This is used by the core/Config class.
 */
return array(
	/**
	 * Configuration for: Base URL
	 * This detects your URL/IP incl. sub-folder automatically. You can also deactivate auto-detection and provide the
	 * URL manually. This should then look like 'http://192.168.33.44/' ! Note the slash in the end.
	 */
	'URL' => 'http://' . $_SERVER['HTTP_HOST'] . str_replace('public', '', dirname($_SERVER['SCRIPT_NAME'])),
	/**
	 * Configuration for: Folders
	 * Usually there's no reason to change this.
	 */
	'PATH_CLASS' => realpath(dirname(__FILE__).'/../../') . '/Application/Core/',
	'PATH_CONTROLLER' => realpath(dirname(__FILE__).'/../../') . '/Application/Controller/',
	'PATH_VIEW' => realpath(dirname(__FILE__).'/../../') . '/Application/View/',
	//dirname(__FILE__).'/../../vendor/log4php/Logger.php';
	/**
	 * Configuration for: logger interface
	 * Used by the log4php library
	 */
	'LOG4PHP_CONFIG' => realpath(dirname(__FILE__)) . '/log4php_config.xml',
	'LOG4PHP_LOGGER_FILE' => realpath(dirname(__FILE__).'/../../') . '/vendor/log4php/Logger.php',
	/**
	 * Configuration for: Avatar paths
	 * Internal path to save avatars. Make sure this folder is writable. The slash at the end is VERY important!
	 */
	'PATH_AVATARS' => realpath(dirname(__FILE__).'/../../') . '/public/avatars/',
	'PATH_AVATARS_PUBLIC' => 'avatars/',
	/**
	 * Configuration for: Default controller and action
	 */
	'DEFAULT_CONTROLLER' => 'index',
	'DEFAULT_ACTION' => 'index',
	/**
	 * Configuration for: Database
	 * DB_TYPE The used database type. Note that other types than "mysql" might break the db construction currently.
	 * DB_HOST The mysql hostname, usually localhost or 127.0.0.1
	 * DB_NAME The database name
	 * DB_USER The username
	 * DB_PASS The password
	 * DB_PORT The mysql port, 3306 by default (?), find out via phpinfo() and look for mysqli.default_port.
	 * DB_CHARSET The charset, necessary for security reasons. Check Database.php class for more info.
	 */
	'DB_TYPE' => 'mysql',
	'DB_HOST' => '192.168.0.13',
	'DB_NAME' => 'sematel_ssg',
	'DB_USER' => 'Sematl',
	'DB_PASS' => 'Sematl2014#',
	'DB_PORT' => '3306',
	'DB_CHARSET' => 'utf8',
	/**
	 * Configuration for: Additional login providers: Facebook
	 * CURRENTLY REMOVED (as Facebook has removed support for the used API version).
	 * Another, better and up-to-date implementation might come soon.
	 */
	'FACEBOOK_LOGIN' => false,
	/**
	 * Configuration for: Captcha size
	 * The currently used Captcha generator (https://github.com/Gregwar/Captcha) also runs without giving a size,
	 * so feel free to use ->build(); inside CaptchaModel.
	 */
	'CAPTCHA_WIDTH' => 359,
	'CAPTCHA_HEIGHT' => 100,
	/**
	 * Configuration for: Cookies
	 * 1209600 seconds = 2 weeks
	 * COOKIE_PATH is the path the cookie is valid on, usually "/" to make it valid on the whole domain.
	 * @see http://stackoverflow.com/q/9618217/1114320
	 * @see php.net/manual/en/function.setcookie.php
	 */
	'COOKIE_RUNTIME' => 1209600,
	'COOKIE_PATH' => '/',
	/**
	 * Configuration for: Avatars/Gravatar support
	 * Set to true if you want to use "Gravatar(s)", a service that automatically gets avatar pictures via using email
	 * addresses of users by requesting images from the gravatar.com API. Set to false to use own locally saved avatars.
	 * AVATAR_SIZE set the pixel size of avatars/gravatars (will be 44x44 by default). Avatars are always squares.
	 * AVATAR_DEFAULT_IMAGE is the default image in public/avatars/
	 */
	'USE_GRAVATAR' => false,
	'GRAVATAR_DEFAULT_IMAGESET' => 'mm',
	'GRAVATAR_RATING' => 'pg',
	'AVATAR_SIZE' => 44,
	'AVATAR_JPEG_QUALITY' => 85,
	'AVATAR_DEFAULT_IMAGE' => 'default.jpg',
	/**
	 * Configuration for: Email server credentials
	 *
	 * Here you can define how you want to send emails.
	 * If you have successfully set up a mail server on your linux server and you know
	 * what you do, then you can skip this section. Otherwise please set EMAIL_USE_SMTP to true
	 * and fill in your SMTP provider account data.
	 *
	 * EMAIL_USED_MAILER: Check Mail class for alternatives
	 * EMAIL_USE_SMTP: Use SMTP or not
	 * EMAIL_SMTP_AUTH: leave this true unless your SMTP service does not need authentication
	 */
	'EMAIL_USED_MAILER' => 'phpmailer',
	'EMAIL_USE_SMTP' => false,
	'EMAIL_SMTP_HOST' => 'yourhost',
	'EMAIL_SMTP_AUTH' => true,
	'EMAIL_SMTP_USERNAME' => 'yourusername',
	'EMAIL_SMTP_PASSWORD' => 'yourpassword',
	'EMAIL_SMTP_PORT' => 465,
	'EMAIL_SMTP_ENCRYPTION' => 'ssl',
	/**
	 * Configuration for: Email content data
	 */
	'EMAIL_PASSWORD_RESET_URL' => 'login/verifypasswordreset',
	'EMAIL_PASSWORD_RESET_FROM_EMAIL' => 'no-reply@example.com',
	'EMAIL_PASSWORD_RESET_FROM_NAME' => 'My Project',
	'EMAIL_PASSWORD_RESET_SUBJECT' => 'Password reset for PROJECT XY',
	'EMAIL_PASSWORD_RESET_CONTENT' => 'Please click on this link to reset your password: ',
	'EMAIL_VERIFICATION_URL' => 'login/verify',
	'EMAIL_VERIFICATION_FROM_EMAIL' => 'no-reply@example.com',
	'EMAIL_VERIFICATION_FROM_NAME' => 'My Project',
	'EMAIL_VERIFICATION_SUBJECT' => 'Account activation for PROJECT XY',
	'EMAIL_VERIFICATION_CONTENT' => 'Please click on this link to activate your account: ',
	/**
	 * Configuration for: SP SDP data
	 */
	'SP_ID' => '601551',
	'SP_PASSWORD' => 'Tmd#s348!',
	/**
	 * Configuration for: SDP SendSms configurations
	 */
	'SEND_SMS_DEFAULT_SERVICE_ENDPOINT' => 'http://196.201.216.13:8310/SendSmsService/services/SendSms',
	'SEND_SMS_DEFAULT_DELIVERY_NOTIFICATION_FLAG' => 1,
	'SEND_SMS_DEFAULT_DELIVERY_NOTIFICATION_ENDPOINT' => 'http://197.237.112.133:49200/ssg/delivery/receipt/',
	'SEND_SMS_MAXIMUM_RECIPIENTS' => 1,
	/**
	 * Configuration for: SDP Get Sms Delivery Status configurations
	 */
	'GET_DELIVERY_STATUS_DEFAULT_SERVICE_ENDPOINT' => 'http://196.201.216.13:8310/SendSmsService/services/SendSms',
	/**
	 * Configuration for: SDP SmsNotificationManager configurations
	 */
	'SMS_NOTIFICATION_MANAGER_ENDPOINT' => 'http://196.201.216.13:8310/SmsNotificationManagerService/services/SmsNotificationManager',
	/**
	 * Configuration for: Service Manager configurations
	 * SMS_ON_DEMAND_SERVICE_TYPE on demand service type id, confirm the database configurations
	 */
	'SMS_ON_DEMAND_SERVICE_TYPE' => 1,
	'SMS_SERVICE_ON' => 1,
	'SMS_SERVICE_OFF' => 0,
	/**
	 * Configuration for: Service Configurations - This should be sychroznized with the database parameters
	 */
	 //BULK SMS   --Not yet set
	 //Dummy 
	'SERVICE_STATUS_6013202000002998' => 1,
	'SERVICE_CODE_6013202000002998' => '888',
	'SERVICE_DELIVERY_ENDPOINT_6013202000002998' => 'http://197.237.114.248:49200/ssg/delivery/receipt/',
	'SERVICE_STATUS_6013202000002998' => 1,
	
	//ON DEMAND SERVICE
	//Information Services (I)
	'SERVICE_STATUS_6015512000112211' => 1,
	'SERVICE_CODE_6015512000112211' => '22652',
	'SERVICE_DELIVERY_ENDPOINT_6015512000112211' => 'http://197.237.114.248:49200/ssg/delivery/receipt/',
	//Music Tracks (t)
	'SERVICE_STATUS_6015512000111957' => 1,
	'SERVICE_CODE_6015512000111957' => '22652',
	'SERVICE_DELIVERY_ENDPOINT_6015512000111957' => 'http://197.237.114.248:49200/ssg/delivery/receipt/',

	//SUBSCRIPTION SERVICE
	//Music Follow me (F)
	'SERVICE_STATUS_6015512000111477' => 1,
	'SERVICE_CODE_6015512000111477' => '22652',
	'SERVICE_DELIVERY_ENDPOINT_6015512000111477' => 'http://197.237.114.248:49200/ssg/delivery/receipt/',
	//Music (M)
	'SERVICE_STATUS_6015512000111958' => 1,
	'SERVICE_CODE_6015512000111958' => '22652',
	'SERVICE_DELIVERY_ENDPOINT_6015512000111958' => 'http://197.237.114.248:49200/ssg/delivery/receipt/',
	
);
