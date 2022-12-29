<?php
/**
 * Configuration file.
 * apiPath/apiSiteUrl must end with an `__CRM_URL__/webservice/`.
 * For CRM versions greater than 6.1.255, you need to add: RestApi , Portal. `__CRM_URL__/webservice/RestApi/`.
 * For CRM versions greater than 6.3, you need to add: WebserviceStandard , WebservicePremium. `__CRM_URL__/webservice/WebserviceStandard/`.
 *
 * @copyright YetiForce Sp. z o.o
 * @author    Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
return [
	'apiPath' => 'https://replace_with_your_yetiforce_url/webservice/WebserviceStandard/',
	'wsAppName' => 'replace_with_your_webservice_app_name',
	'wsAppPass' => 'replace_with_your_webservice_app_password',
	'wsApiKey' => 'replace_with_your_webservice_app_key',
	'wsUserName' => 'replace_with_your_webservice_user_login',
	'wsUserPass' => 'replace_with_your_webservice_user_password'
	// 'bruteForceDriver' => 'db',
	// 'bruteForceDayLimit' => 1000,
	// 'logDriver' => 'db',
	// 'dbHost' => 'localhost',
	// 'dbName' => 'api',
	// 'dbPort' => 3306,
	// 'dbUser' => 'api',
	// 'dbPass' => '',
];
