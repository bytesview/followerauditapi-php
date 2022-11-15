<?php
require_once '../autoload.php';
require_once 'config.php';

use FauditApi\FauditApi;

$auditapiObj = new FauditApi(FOLLOWERAUDIT_API_KEY);

$audit_id = 'XXX';

$response = $auditapiObj->auditstatus($audit_id);

var_dump($response);