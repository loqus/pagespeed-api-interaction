<?php
require 'vendor/autoload.php';
require 'config.php';

//Build the API url and request
//https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=https%3A%2F%2Fwww.mobiele-telefoons.nl
&strategy=desktop&fields=formattedResults%2Cid%2CinvalidRules%2Ckind%2CpageStats%2CresponseCode%2CruleGroups%2Cscreenshot%2Ctitle%2Cversion&key={YOUR_API_KEY}

$urltocheck = "https://www.yourdomain.com";

$psiurl = "https://www.googleapis.com/pagespeedonline/v2/runPagespeed?";

$psivariables = array();
$psivariables[] = "url=".$urltocheck;
$psivariables[] = "filter_third_party_resources=".FILTER_THIRD_PARTY_RESOURCES;
$psivariables[] = "strategy=".STRATEGY;
$psivariables[] = "locale=".LOCALE;
$psivariables[] = "screenshot=".SCREENSHOT;
$psivariables[] = "fields=".FIELDS;
$psivariables[] = "key=".APIKEY;

$psiurl .= urlencode(implode("&",$psivariables));

