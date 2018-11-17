<?php

define(HOME, $_SERVER['DOCUMENT_ROOT'] . '/');
define(ROOT, HOME . '../');
define(CONFIG, ROOT . 'config/');
define(ENGINE, ROOT . 'engine/');
define(MODULES, ROOT . 'modules/');
define(TEMPLATES, ROOT . 'templates/');
define(SITEURL, $_SERVER["HTTP_HOST"] . '/');

require_once 'main_functions.php';
require_once 'hack_functions.php';
require_once 'user_functions.php';