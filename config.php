<?php

//filter_third_party_resources exclude third party resources
define("FILTER_THIRD_PARTY_RESOURCES",false);

//localize formatted results
define("LOCALE","");

//Add screenshot to results
define("SCREENSHOT",true);

//strategy values mobile, desktop or both
define("STRATEGY","desktop");

//fields can include formattedResults,id,invalidRules,kind,pageStats,responseCode,ruleGroups,screenshot,title,version
define("FIELDS","formattedResults,id,invalidRules,kind,pageStats,responseCode,ruleGroups,screenshot,title,version");

//generate your own key here: https://console.developers.google.com/apis/credentials
define("GOOGLEAPIKEY","desktop");
