<?php
 if(isset($_GET["brand"]) && ! empty($_GET["brand"])) {
	$brand =$_GET["brand"];
}else{
	$brand = 'adidas';
}

//include the correct content
$lan='UK';
$locale = 'en_GB';
$localePart = explode("_", $locale);
$market = defined('__MARKET_OVERRIDE__') ? __MARKET_OVERRIDE__ : 'auto';
// Find language and market in locale param
if(isset($_GET["locale"]) && ! empty($_GET["locale"])) {
    $locale = preg_match('/^[A-Z]+_[A-Z]+$/i', $_GET["locale"]) ? $_GET["locale"] : $locale;
    $localePart = explode("_", $locale);
    if(isset($localePart[1])) {
      $market = strtolower($localePart[1]);
    }
	if(isset($localePart[0])) {
		$lan = strtolower($localePart[0]);
	}
} else if(isset($_COOKIE['adidas_country'])){
    $market=$_COOKIE['adidas_country'];
}
//# Convert market for fr_CA to CF
if( $locale == 'fr_CA' ) {
    $market = 'CF';
}
//# Validate market is a small alpha string
$market = preg_match('/^[A-Z]{2,4}$/i', $market) ? $market : 'UK';
$env= getenv('APPLICATION_ENV');
$BASE='';
$CDN='CDN_PATH';

//echo "<script type='text/javascript'>alert('$env');</script>"; 
// always use the com markets for all locales, to differentiate between the resources for various locales change the file name or asset folder name based on locale.
// for example : http://staging.adidas.com/com/apps/campaign-name/resources/de_DE.json?<query-string for device, locale, cache burst parameter>
switch ($env) {
     
    case 'localdev':
        break;
    case 'devlb':
        $BASE='//hp.dev.brand.adidas.com/com/storefinder';
        $CDN='//hp.dev.brand.adidas.com/com/storefinder/CDN_PATH';
        define('__PLACES_URL__','//staging.placesws.adidas-group.com/API/');
		define('__UTAG_URL__','//tags.tiqcdn.com/utag/adidas/adidasbrand/qa/utag.js');
		define('__ADIDAS_URL__','//hp.dev.brand.adidas.com/com/storefinder/');
        break;
    //case 'uat':
    case 'qa':
        $BASE='//staging.adidas.com/com/storefinder';
        $CDN='//staging.adidas.com/com/storefinder/CDN_PATH';
        define('__PLACES_URL__','//staging.placesws.adidas-group.com/API/');
		define('__UTAG_URL__','//tags.tiqcdn.com/utag/adidas/adidasbrand/qa/utag.js');
        define('__ADIDAS_URL__', '//staging.adidas.com/com/storefinder/');
		break;
    case 'prod':
		$BASE='//www.adidas.com/com/storefinder';
        $CDN='//www.adidas.com/com/storefinder/CDN_PATH';
        define('__PLACES_URL__','//placesws.adidas-group.com/API/');
		define('__UTAG_URL__','//tags.tiqcdn.com/utag/adidas/adidasglobal/prod/utag.js');
        define('__ADIDAS_URL__', '//www.adidas.com/com/storefinder/');
		break;
     default:
        $BASE='//localhost/final';
        $CDN='//localhost/final';
        define('__PLACES_URL__','//staging.placesws.adidas-group.com/API/');
		define('__UTAG_URL__','//tags.tiqcdn.com/utag/adidas/adidasbrand/qa/utag.js');
        define('__ADIDAS_URL__', '//localhost/storefinder/');
}
//echo __ADIDAS_URL__; 
/* Setting the language for markets, this may depend on the campaign requirements */
switch (strtoupper($market)) {
        case 'UK':
        case 'BE':
        case 'DK':
        case 'FI':
        case 'IE':
        case 'SE':
        case 'AU':
        case 'CA':
        case 'NZ':
        case 'PH':
        case 'SG':
        case 'AE':
        case 'KW':
        case 'EE':
        case 'BALTICS':
        case 'COM':
        case 'NG':
        case 'GR':
        case 'ID':
        case 'IN':
        case 'NO':
        case 'ZA':
            $lan = 'UK';
            break;
        case 'DE':
        case 'AT':
        case 'NA':
        case 'CH':
            $lan = 'DE';
            break;
        case 'CZ':
            $lan = 'CZ';
            break;
        case 'FR':
        case 'LU':
            $lan = 'FR';
            break;
        case 'ES':
        case 'EC':
        case 'AR':
        case 'CU':
        case 'GT':
        case 'VE':
        case 'HN':
        case 'PY':
        case 'SV':
        case 'CR':
        case 'MX':
        case 'CO':
        case 'CL':
        case 'PA':
        case 'GQ':
        case 'PE':
            $lan = 'ES';
            break;
        case 'IT':
        case 'SM':
        case 'VA':
            $lan = 'IT';
            break;
        case 'NL':
            $lan = 'NL';
            break;
        case 'PL':
            $lan = 'PL';
            break;
        case 'SK':
            $lan = 'SK';
            break;
        case 'AR':
            $lan = 'AR';
            break;
        case 'BR':
            $lan = 'BR';
            break;
        case 'CF':
            $lan = 'CF';
            break;
        case 'CL':
            $lan = 'CL';
            break;
        case 'CO':
            $lan = 'CO';
            break;
        case 'MX':
            $lan = 'MX';
            break;
        case 'MX':
            $lan = 'MX';
            break;
        case 'PE':
            $lan = 'PE';
            break;
        case 'RU':
        case 'BY':
        case 'KZ':
        case 'KG':
        case 'SU':
        case '??':
        case 'TJ':
            $lan = 'RU';
            break;
        case 'CN':
            $lan = 'CN';
            break;
        case 'JP':
            $lan = 'JP';
            break;
        case 'KR':
            $lan = 'KR';
            break;
        case 'CH':
            $lan = 'CH';
            break;
        case 'HK':
            $lan = 'HK';
            break;
        case 'HU':
            $lan = 'HU';
            break;
        case 'LA':
        case 'VE':
            $lan = 'LA';
            break;
        case 'PT':
            $lan = 'PT';
            break;
        case 'TR':
            $lan = 'TR';
            break;
        case 'TW':
            $lan = 'TW';
            break;
        case 'KP':
        case 'KR':
            $lan = 'KR';
            break;
		case 'VN':
            break;
        default:
            $lan = 'UK';
}