<?php
header('Location: public/');


require_once '../../vendor/autoload.php';

if(file_exists('../agiletoolkit-sandbox.phar')){
	require_once "../agiletoolkit-sandbox.phar";

}

require_once 'lib/Frontend.php';

$api=new Frontend('frontend');
$api->main(); 