\Bitrix\Main\Loader::includeModule('conversion') ;
use \Bitrix\Conversion\Internals\MobileDetect;
$detect = new MobileDetect;
if($detect->isMobile()) {
	define("ISMOBILE", true);
} else {
	define("ISMOBILE", false);
}
