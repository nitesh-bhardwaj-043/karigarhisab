<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';
$route["photo-gallery"] = "gallery/photo_gallery";
$route["video-gallery"] = "gallery/video_gallery";
$route["(:any).htm"] = "home/error";
$route["infrastructure"] = "about/infrastructure";
$route["why-choose-us"] = "about/choose";
$route["home-relocation"] = "services/homeRelocation";
$route["courier-and-cargo"] = "services/courier";
$route["luggage-delivery"] = "services/luggage";
$route["goods-insurance"] = "services/insurance";
$route["service"] = "services/service";

$route["about"] = "services/about";
$route["book-service"] = "services/book";
$route["policy"] = "services/policy";
$route["terms"] = "services/terms";

$route["precious"] = "products/precious";
$route["semiprecious"] = "products/semiprecious";
$route["birthstone"] = "products/birthstone";
$route["braclet"] = "products/brac";
$route["lab"] = "services/labs";
$route["how"] = "services/how";



$route['bracelet/(:any)'] = 'products/bracelet/$1';
$route['gem/(:any)'] = 'products/gem/$1';

$route["contact"] = "services/contact";
$route["office-relocation"] = "services/office";
$route["car-transportation-service"] = "services/car";
$route["our-branches"] = "packers_movers/state";
$route["packers-movers-(:any)-india"] = "packers_movers/state_services/$1";
$route["(:any)/packers-movers-(:any)"] = "packers_movers/city/$1/$2";
$route["bihar"] = "packers_movers/state_services/bihar";

$route['bills/(:any)'] = 'bills/view/$1';

$route['translate_uri_dashes'] = TRUE;
