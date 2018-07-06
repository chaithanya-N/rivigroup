<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['iot'] = 'welcome/Services/iot';
$route['Investran'] = 'welcome/Investran';
$route['Security'] = 'welcome/Security';
$route['Machine'] = 'welcome/Machine';
$route['CloudImplementation'] = 'welcome/CloudImplementation';
$route['Staffing'] = 'welcome/Staffing';
$route['Testing'] = 'welcome/Testing';
$route['CyberSecurity'] = 'welcome/CyberSecurity';
$route['Strategy'] = 'welcome/Strategy';
$route['SystemIntegration'] = 'welcome/SystemIntegration';
$route['Program'] = 'welcome/Program';
$route['Infrastructure'] = 'welcome/Infrastructure';
$route['InfrastructureS'] = 'welcome/InfrastructureS';
$route['Dashboard'] = 'welcome/Dashboard';
$route['Recovery'] = 'welcome/Recovery';
$route['Oracle'] = 'welcome/Oracle';
$route['Solutions'] = 'welcome/Solutions';
$route['Intelligence'] = 'welcome/Intelligence';
$route['Geographical'] = 'welcome/Geographical';
$route['Embedded'] = 'welcome/Embedded';
$route['Telecommunications'] = 'welcome/Telecommunications';
$route['Financial'] = 'welcome/Financial';
$route['Insurance'] = 'welcome/Insurance';
$route['Manufacturing'] = 'welcome/Manufacturing';
$route['Government'] = 'welcome/Government';
$route['OffShore'] = 'welcome/OffShore';
$route['clients'] = 'welcome/clients';
$route['Testimonials'] = 'welcome/Testimonials';
$route['about'] = 'welcome/about';
$route['Services'] = 'welcome/Services';
$route['Expertise'] = 'welcome/Expertise';
$route['Contact'] = 'welcome/Contact';
$route['Casestudy'] = 'welcome/Casestudy';
$route['careers'] = 'welcome/careers';
$route['StrategyManagement Consulting'] = 'welcome/StrategyManagement Consulting';
$route['Enterprise '] = 'welcome/Enterprise';
$route['Business Intelligence '] = 'welcome/Business Intelligence';
$route['Enterprise Portals Solutions'] = 'welcome/Enterprise Portals Solutions';
$route['Customer Relationship'] = 'welcome/Customer Relationship';
$route['Enterprise Resource'] = 'welcome/Enterprise Resource';
$route['Billing Systems'] = 'welcome/Billing Systems';
$route['Benefits'] = 'welcome/Benefits';
$route['current openings'] = 'welcome/current openings';
$route['Referral Program'] = 'welcome/Referral Program';
$route['Send Resume'] = 'welcome/Send Resume';
$route['app'] = 'welcome/app';
$route['web'] = 'welcome/web';
$route['Digital'] = 'welcome/Digital';
$route['currentopenings2'] = 'welcome/currentopenings2';