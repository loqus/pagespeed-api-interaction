<?php
require 'config.php';
require 'vendor/autoload.php';

$guzzleclient = new \GuzzleHttp\Client([
    'timeout' => 60,
    'verify' => false,
]);

//Build the API url and request
//https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=https%3A%2F%2Fwww.yourdomain.com&strategy=desktop&fields=formattedResults%2Cid%2CinvalidRules%2Ckind%2CpageStats%2CresponseCode%2CruleGroups%2Cscreenshot%2Ctitle%2Cversion&key={YOUR_API_KEY}

//change this to your url
$urltocheck = "https://www.yourdomain.com";

$psiurl = "https://www.googleapis.com/pagespeedonline/v2/runPagespeed?";

$psivariables = array();

$psivariables[] = "url=".urlencode($urltocheck);
$psivariables[] = "strategy=".urlencode(PSISTRATEGY);
$psivariables[] = "locale=".urlencode(PSILOCALE);
$psivariables[] = "fields=".urlencode(PSIFIELDS);
$psivariables[] = "key=".urlencode(PSIAPIKEY);

if(PSIFILTER_THIRD_PARTY_RESOURCES === true){
	$psivariables[] = "filter_third_party_resources=true";
}

if(PSISCREENSHOT === true){
    $psivariables[] = "screenshot=true";
}

$psiurl .= implode("&",$psivariables);

//$res is in json format
$res = $client->request('GET', $psiurl);

$jsonobject = json_decode($res->getBody());

//Do what you want with the results
print_r($jsonobject);
