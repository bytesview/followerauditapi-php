<?php
require_once '../autoload.php';
require_once 'config.php';

use FauditApi\FauditApi;

$auditapiObj = new FauditApi(FOLLOWERAUDIT_API_KEY);

$username = 'davidabrock';

$response = $auditapiObj->newaudit($username);

var_dump($response);