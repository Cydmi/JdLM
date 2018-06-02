<?php

use JD\JdClient;
use JD\request\ActyEnqueryRegistrationDataCountRequest;
use JD\request\ActyQueryRegistrationItemListRequest;

require __DIR__.'/vendor/autoload.php';
$jd=new  JdClient();
printf("%s\n",$jd->serverUrl);

$ac=new ActyEnqueryRegistrationDataCountRequest();
printf("%s\n",$ac->getApiMethodName());

$Ac = new ActyQueryRegistrationItemListRequest();
printf("%s\n",$Ac->getApiMethodName());

 