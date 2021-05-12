<?php
require_once '../libs/Autoloader.php';
Smarty_Autoloader::register();

$smarty = new Smarty();
$smarty->setConfigDir('../configs');
$smarty->setTemplateDir('../templates');
$smarty->setCacheDir('../cache');
$smarty->setCompileDir('../templates_c');

// load a section
$smarty->configLoad('my.conf');

// display the output
$smarty->display('pages/read.tpl');