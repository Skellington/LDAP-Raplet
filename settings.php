<?php

/********************************
Raplet Meta Data
Settings to describe the Raplet

$rapplet_meta['name']                   Raplet name
$rapplet_meta['description']            Raplet description (HTML Permitted)
$rapplet_meta['welcome_text']           Welcome text displayed to user (HTML Permitted)
$rapplet_meta['icon_url']               URL of icon (100x100 px)
$rapplet_meta['preview_url']            URL of preview image (220px wide)
$rapplet_meta['provider_name']          Raplet provider organisation name
$rapplet_meta['provider_url']           Raplet provider organisation URL
$rapplet_meta['data_provider_name']     Raplet data provider name (Optional)
$rapplet_meta['data_provider_url']      Raplet data provider URL (Optional)
$rapplet_meta['configuration']          Unused

********************************/
$rapplet_meta['name'] = "LDAP Raplet";
$rapplet_meta['description'] = "Searches for user in LDAP Directory based upon email address.";
$rapplet_meta['welcome_text'] = "Thanks for using LDAP Raplet";
$rapplet_meta['icon_url'] = "http://localhost/LDAP-Raplet/icon.png";
$rapplet_meta['preview_url'] = "http://localhost/LDAP-Raplet/preview.png";
$rapplet_meta['provider_name'] = "Craig Russell";
$rapplet_meta['provider_url'] = "http://www.craig-russell.co.uk";
$rapplet_meta['data_provider_name'] = "";
$rapplet_meta['data_provider_url'] = "";
$rapplet_meta['configuration'] = "";


/********************************
LDAP Server Settings

$ldap_server['hostname']            LDAP Server Hostname or IP
$ldap_server['port']                LDAP Server Port
$ldap_server['bind_rdn']            Bind User Fully Qualified DN
$ldap_server['bind_pass']           Bind User Password
$ldap_server['base_dn']             Search Base
$ldap_server['protocol_version']    LDAP Protocol Version

********************************/
$ldap_server['hostname']            = "localhost";
$ldap_server['port']                = "389";
$ldap_server['bind_rdn']            = "cn=admin,dc=example,dc=com";
$ldap_server['bind_pass']           = "passw0rd";
$ldap_server['base_dn']             = "ou=People,dc=example,dc=com";
$ldap_server['protocol_version']    = 3;


/********************************

Array of attributes to return.
Key is attribute name (lowercase), value is label displayed to user.
Elements listed in display order.

********************************/
$ldap_attributes = array (
        'displayname'       => 'Name',
        'o'                 => 'Organisation',
        'title'             => 'Job Title',
        'ou'                => 'Department',
        'mail'              => 'Email',
        'telephonenumber'   => 'Tel',
        'mobile'            => 'Mob'
    );


/********************************

Display CSS and JS

********************************/
$css = "
        ul {list-style-type: none; margin: 0; padding: 0;}
        li {font-size: 1.1em; margin: 0 0 0.5em 0; padding: 0;}
        li span {font-weight: bold; margin-right: 0.5em;}
    ";
$js = "";

?>
