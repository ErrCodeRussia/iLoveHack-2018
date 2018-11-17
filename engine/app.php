<?php

define(HOME, $_SERVER['DOCUMENT_ROOT'] . '/');
define(ROOT, HOME . '../');
define(CONFIG, ROOT . 'config/');
define(ENGINE, ROOT . 'engine/');
define(MODULES, ROOT . 'modules/');
define(TEMPLATES, ROOT . 'templates/');
define(SITEURL, $_SERVER["HTTP_HOST"] . '/');

require_once 'functions.php';