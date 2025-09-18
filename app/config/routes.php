<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| See user guide: https://codeigniter.com/user_guide/general/routing.html
*/

/*
| -------------------------------------------------------------------------
| Reserved routes
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'health';   // temporary safe default (no DB)
$route['404_override']       = '';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| App routes (keep existing)
| -------------------------------------------------------------------------
*/

// Settings / orders / tickets
$route['new_order']          = 'order/new_order';
$route['tickets/(:num)']     = 'tickets/view/$1';

// Client area
$route['login']              = 'auth/login';
$route['faq']                = 'client/faq';
$route['terms']              = 'client/terms';
$route['cookie-policy']      = 'client/cookie_policy';
$route['news-annoucement']   = 'client/news_annoucement';
$route['set-language']       = 'client/set_language';
$route['back-to-admin']      = 'client/back_to_admin';
$route['ref/(:any)']         = 'client/referral/$1';

// Payments IPN
$route['unitpay_ipn']        = 'add_funds/unitpay/unitpay_ipn/';
$route['cashmaal_ipn']       = 'add_funds/cashmaal/cashmaal_ipn/';
$route['ehot_ipn']           = 'add_funds/ehot/ipn/';
$route['gbprimepay_ipn']     = 'add_funds/gbprimepay/gbprimepay_ipn/';
$route['mercadopago_ipn']    = 'add_funds/mercadopago/ipn';
$route['payhere_ipn']        = 'add_funds/payhere/ipn/';
$route['mercadopago_ipn']    = 'add_funds/mercadopago/ipn/';
$route['payzah_ipn']         = 'add_funds/payzah/ipn/';
$route['payku_ipn']          = 'add_funds/payku/ipn/';
$route['coinpayments_ipn']   = 'add_funds/coinpayments/ipn/';
$route['coinbase_ipn']       = 'add_funds/coinbase/ipn/';
$route['cardlink_ipn']       = 'add_funds/cardlink/ipn/';
$route['flutterwave_ipn']    = 'add_funds/flutterwave/ipn/';
$route['razorpay_ipn']       = 'add_funds/razorpay/ipn/';
$route['epayco_ipn']         = 'add_funds/epayco/ipn/';
$route['webmoney_ipn']       = 'add_funds/webmoney/ipn/';
$route['mpesa_ipn']          = 'add_funds/mpesa_/ipn/';
$route['paytr_ipn']          = 'add_funds/paytr/ipn/';
$route['ecpay_ipn']          = 'add_funds/ecpay/ipn/';
$route['(:any)_ipn']         = 'add_funds/$1/ipn/';

// Payment crons
$route['coinpayments/cron']  = 'add_funds/coinpayments/cron';
$route['coinbase/cron']      = 'add_funds/coinbase/cron';
$route['payop/cron']         = 'add_funds/payop/cron';
$route['midtrans/cron']      = 'add_funds/midtrans/cron';
$route['paymongo/cron']      = 'add_funds/paymongo/cron';
$route['payku/cron']         = 'add_funds/payku/cron';
$route['cron/refill_status'] = 'refill/cron';

// API provider crons
$route['api_provider/cron/order']                 = 'cron/order';
$route['api_provider/cron/status']                = 'cron/multiple_status';
$route['api_provider/cron/status_subscriptions']  = 'cron/status_subscriptions';

// Admin
$route['admin']                 = 'admin/login';
$route['admin/settings/store']  = 'admin/settings/store';
$route['admin/settings/(:any)'] = 'admin/settings/index/$1';
$route['upload_files']          = 'admin/file_manager/upload_files';
