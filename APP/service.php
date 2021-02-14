<?php

header('Content-type: application/json; charset=UTF-8');

define('BASE_PATH', realpath( __DIR__ . '/../../' ));

require_once BASE_PATH . '/inc/general.inc.php';
require_once BASE_PATH . '/inc/lib/Language.php';
require_once BASE_PATH . '/inc/lib/StoreDetailsMailer.php';


switch (getPostVar('action'))
{
	case 'mail_store_details':
		$storeId = getPostVar('storeid');
		$toEmail = getPostVar('email');
		$locale = getPostVar('locale');
		$deeplink = getPostVar('deeplink');

		$langData = new Language();
		$langData->setLocale( $locale )
			->setDirectoryPath( WEB_ROOT . '/assets/localization' )
			->read();

		$mailer = new StoreDetailsMailer();
		$mailer->setStoreId( $storeId )
			->setLanguageData( $langData )
			->setToEmail( $toEmail )
			->setFrom( STORELOCATOR_MAILER_FROM_EMAIL )
			->setInfoServiceUrl( STORELOCATOR_STOREINFO_SERVICE_URL )
			->setDeeplink( $deeplink );

		$result = $mailer->send();
		break;

	default:
		$result = false;

}

print json_encode( $result );
