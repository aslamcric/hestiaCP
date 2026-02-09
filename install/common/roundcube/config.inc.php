<?php

// --- Database and Server Configuration ---
$config['db_dsnw'] = 'mysql://roundcube:FBpvNRd2tbtNmL8h@localhost/roundcube';
$config['default_host'] = 'localhost';
$config['smtp_server'] = 'localhost';
$config['username_domain'] = 'aslam1.com';
$config['des_key'] = 'rcmail-perl-aslam-2026';

// --- Password Plugin options ---
$config["password_driver"] = "hestia";
$config["password_minimum_length"] = 8;
$config["password_require_nonalpha"] = false;
$config["password_log"] = false;
$config["password_login_exceptions"] = null;
$config["password_idn_ascii"] = false;
$config["password_hestia_host"] = "localhost";
$config["password_hestia_port"] = "8083";

// --- Shadhin Mail Branding Customization ---
$config['product_name'] = 'Shadhin Mail';

// logo setup
$config['skin_logo'] = [
    'login' => 'skins/elastic/images/shadhinHostingLogo.png',
    'mail' => 'skins/elastic/images/shadhinHostingLogo.png'
];

$config['support_url'] = 'https://aslam1.com';