<?php

/**
 * load dependency files
 */
require_once getcwd() . '/env.php';
require_once getcwd() . '/lib/helpers.php';

/**
 * set constance for directories
 */
DEFINE('SERVER_ROOT', $env->server_root);
DEFINE('ROOT', getcwd());

/**
 * set constance for database object
 */
DEFINE('HOST', $env->dbhost);
DEFINE('DB', $env->dbname);
DEFINE('USER', $env->dbuser);
DEFINE('PASSWORD', $env->dbpass);

/**
 * All items in this section would be moved to it respect config file
 */