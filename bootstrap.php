<?php

require "vendor/autoload.php";

use app\classes\Bind;
use app\models\Connection;

$config = require "app/settings/dbconfig.php";

Bind::set('config', $config);
Bind::set('connection', Connection::connect());
